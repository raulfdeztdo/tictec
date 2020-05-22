<?php
  class User extends CI_Controller {

    public function __construct() {       // Define el constructor
      parent::__construct();              // Invoca al constructor de la clase superior
      $this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
      $this->load->model('Cursos_Model', 'UM_Cursos'); //Carga el modelo

    }

    public function index(){
      redirect(base_url().'Auth/login');
    }

    public function checkRegistro($usuario){
      $new_user = array(
        'nombre' => $this->input->post('usuario'),
        'email' => $this->input->post('email'),
        'f_nac' => $this->input->post('fecha_nac'),
        'group' => $this->input->post('group'),
        'password' => hash('sha256', $this->input->post('password'))
      );

      if (!$this->UM_Users->checkNombreUsuario($new_user['nombre'])) {
        if (!$this->UM_Users->checkEmail($new_user['email'])) {
          $this->UM_Users->creauser($new_user);
          return TRUE;
        } else {
          $this->form_validation->set_message('checkRegistro','Email inválido: ya existe un usuario con ese email');
          return FALSE;
        }
      } else{
        $this->form_validation->set_message('checkRegistro','Usuario inválido: ya existe un usuario con ese nombre');
        return FALSE;
      }

    }

    public function registro(){
      if (!$this->input->post() && (!(isset($_SESSION['logged_in'])))) {
        $menu['activo']="inicio";
        $title['title']="Registro";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $this->load->view('registro', null);
      } else {
        if (!(isset($_SESSION['logged_in']))) {
          $this->form_validation->set_rules('usuario', 'NombreUsuario','trim|required|xss_clean|callback_checkRegistro');
          $this->form_validation->set_rules('email', 'Email','trim|required|xss_clean');
          $this->form_validation->set_rules('group', 'Grupo','trim|required|xss_clean');
          $this->form_validation->set_rules('fecha_nac', 'Fecha_Nacimiento','trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'password','trim|required|xss_clean');
          $this->form_validation->set_rules('password2', 'password2','trim|required|xss_clean');
          if ($this->form_validation->run() == FALSE) {
            //Registro fallido
            $menu['activo']="inicio";
            $title['title']="Registro";
            $this->load->view('head', $title);
            $this->load->view('cabecera', $menu);
            $this->load->view('registro');
          } else {
            //Registro correcto
            redirect(base_url().'Inicio/index');
          }
        } else {
          redirect(base_url().'Inicio/index');
        }
      }
    }

    public function miperfil(){
      if (isset($_SESSION['logged_in'])) {
          $id = $_SESSION['logged_in']['id'];
          $nombre = $_SESSION['logged_in']['nombre'];
          $group = $_SESSION['logged_in']['group'];
          $menu['activo']="inicio";
          $title['title']="Mi perfil";
          $this->load->view('head', $title);
          $this->load->view('cabecera', $menu);
          $data = $this->UM_Users->selectuser($id);
          $data_user['data_user'] = array(
            'id' => $data->id,
            'nombre' => $data->nombre,
            'email' => $data->email,
            'group' => $data->group,
            'f_nac' => $data->f_nac
          );
          $this->load->view('miperfil', $data_user);
          if ($this->UM_Cursos->selectCursosUser($id)) {
            $cursos_user['cursos'] = $this->UM_Cursos->selectCursosUser($id);
            $this->load->view('listado_cursos', $cursos_user);
          } else {
            $this->load->view('listado_cursos');
          }
          if ($this->UM_Cursos->selectCursosProf($nombre) && $group === "Profesor") {
            $cursos_prof['cursos_prof'] = $this->UM_Cursos->selectCursosProf($nombre);
            $this->load->view('listado_cursos_prof', $cursos_prof);
          }
      } else {
          redirect(base_url().'Inicio/index');
      }
    }

    public function editarperfil(){
      if (isset($_SESSION['logged_in'])) {
          $id = $_SESSION['logged_in']['id'];
          $menu['activo']="inicio";
          $title['title']="Mi perfil";
          $this->load->view('head', $title);
          $this->load->view('cabecera', $menu);
          $data = $this->UM_Users->selectuser($id);
          $data_user['data_user'] = array(
            'id' => $data->id,
            'nombre' => $data->nombre,
            'email' => $data->email,
            'group' => $data->group,
            'f_nac' => $data->f_nac
          );
          $this->form_validation->set_rules('user', 'NombreUsuario','trim|required|xss_clean');
          $this->form_validation->set_rules('email', 'Email','trim|required|xss_clean');
          $this->form_validation->set_rules('group', 'Grupo','trim|required|xss_clean');
          $this->form_validation->set_rules('fecha_nac', 'Fecha_Nacimiento','trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'password','trim|required|xss_clean');
          $this->form_validation->set_rules('password2', 'password2','trim|required|xss_clean');
          $this->load->view('editarperfil', $data_user);
          if ($this->UM_Cursos->selectCursosUser($id)) {
            $cursos_user['cursos'] = $this->UM_Cursos->selectCursosUser($id);
            $this->load->view('listado_cursos', $cursos_user);
          } else {
            $this->load->view('listado_cursos');
          }
      } else {
          redirect(base_url().'Inicio/index');
      }
    }

    public function guardarperfil(){
      $user_act = array(
        'id_user' => $_SESSION['logged_in']['id'],
        'nombre' => $_SESSION['logged_in']['nombre'],
        'email' => $_SESSION['logged_in']['email'],
        'group' => $this->input->post('group'),
        'f_nac' => $this->input->post('fecha_nac'),
        'password' => hash('sha256', $this->input->post('password'))
      );

      if ($this->UM_Users->upduser($user_act)) {
        redirect(base_url().'User/miperfil');
      } else {
        redirect(base_url().'User/editarperfil');
      }
    }


  }
?>
