<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

    public function __construct(){
  		parent::__construct();
  		$this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
      $this->load->model('Cursos_Model', 'UM_Cursos'); //Carga el modelo
  	}

    public function categorias() {
  		$menu['activo']="categorias";
      $title['title']="Categorias";
  		$this->load->view('head', $title);
  		$this->load->view('cabecera', $menu);
  		$datos2['ultimos3']=$this->UM_Cursos->ultimos3();
  		$this->load->view('categorias', $datos2);
  	}

    public function frontend(){
        $menu['activo']="categorias";
        $title['title']="FrontEnd";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $categoria="frontend";
        $cat['frontend'] = $this->UM_Cursos->selectCat($categoria);
        $this->load->view('frontend', $cat);
    }

    public function backend(){
      $menu['activo']="categorias";
      $title['title']="BackEnd";
      $this->load->view('head', $title);
      $this->load->view('cabecera', $menu);
      $categoria="backend";
      $cat['backend'] = $this->UM_Cursos->selectCat($categoria);
      $this->load->view('backend', $cat);
    }

    public function office(){
      $menu['activo']="categorias";
      $title['title']="Office";
      $this->load->view('head', $title);
      $this->load->view('cabecera', $menu);
      $categoria="office";
      $cat['office'] = $this->UM_Cursos->selectCat($categoria);
      $this->load->view('office', $cat);
    }

    public function cursodetalles(){
      if ($this->input->post('id_curso')) {
        $id_curso_input = $this->input->post('id_curso');
        $menu['activo']="categorias";
        $title['title']="Curso";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $curso_aux = $this->UM_Cursos->selectId($id_curso_input);
        $curso['data_curso'] = array(
          'id_curso' => $curso_aux->id_curso,
          'nombre' => $curso_aux->nombre,
          'categoria' => $curso_aux->categoria,
          'descripcion' => $curso_aux->descripcion,
          'precio' => $curso_aux->precio,
          'fecha_ini' => $curso_aux->fecha_ini,
          'creadopor' => $curso_aux->creadopor,
          'imagen' => $curso_aux->imagen
        );
        $this->load->view('detallescurso', $curso);
        if (isset($_SESSION['logged_in'])) {
          $id_user =  $_SESSION['logged_in']['id'];
          $id_curso['id_curso'] = $curso_aux->id_curso;
          $cursos_user = $this->UM_Cursos->selectCursosUser($id_user);
          $realizaCurso = false;
          if ($cursos_user) {
            for ($i=0; $i < count($cursos_user) ; $i++) {
              if ($id_curso_input == $cursos_user[$i]['id_curso']) {
                $curso['curso_user'] = $cursos_user[$i];
                $this->load->view('curso_user', $curso);
                $realizaCurso = true;
              }
            }
          }
          if (!$realizaCurso) {
            $this->load->view('curso_user', $id_curso);
          }
        } else {
            $this->load->view('curso_user', $curso);
        }
      } else {
        redirect(base_url().'Cursos/categorias');
      }

    }

    public function creacurso(){

      if ((!$this->input->post()) && ($_SESSION['logged_in']['group']=="Profesor")) {
        $menu['activo']="categorias";
        $title['title']="Subir curso";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $this->load->view('creacurso', null);
      } else {
        if ($_SESSION['logged_in']['group']=="Profesor") {
          $this->form_validation->set_rules('nombre', 'NombreCurso','trim|required|xss_clean|callback_checkSubida');
          $this->form_validation->set_rules('precio', 'Precio','trim|required|xss_clean');
          $this->form_validation->set_rules('fecha_ini', 'fecha_ini','trim|required|xss_clean');
          $this->form_validation->set_rules('categoria', 'categoria','trim|required|xss_clean');
          $this->form_validation->set_rules('descripcion', 'descripcion','required|xss_clean');
          if ($this->form_validation->run() == FALSE) {
            //Creacion de curso fallida
            $menu['activo']="categorias";
            $title['title']="Subir curso";
            $this->load->view('head', $title);
            $this->load->view('cabecera', $menu);
            $this->load->view('creacurso');
          } else {
            //Creacion de curso correcta
            redirect(base_url().'User/miperfil');
          }
        } else {
          redirect(base_url().'Inicio/index');
        }
      }
    }

    public function checkSubida($nombre){
      $new_curso = array(
        'nombre' => $this->input->post('nombre'),
        'categoria' => $this->input->post('categoria'),
        'descripcion' => $this->input->post('descripcion'),
        'precio' => $this->input->post('precio'),
        'fecha_ini' => $this->input->post('fecha_ini'),
        'creadopor' => $_SESSION['logged_in']['nombre'],
        'imagen' => "img/".$this->input->post('image')
      );

      if ($this->UM_Cursos->creaCurso($new_curso)) {
        return TRUE;
      } else{
        return FALSE;
      }

    }

    public function compracurso(){
      if ($this->input->post('id_curso') && isset($_SESSION['logged_in'])) {
        $id_curso=$this->input->post('id_curso');
        $menu['activo']="categorias";
        $title['title']="Compra curso";
        $this->load->view('head', $title);
        $this->load->view('cabecera', $menu);
        $curso_aux = $this->UM_Cursos->selectId($id_curso);
        $curso['data_curso'] = array(
          'id_curso' => $id_curso,
          'nombre' => $curso_aux->nombre,
          'categoria' => $curso_aux->categoria,
          'descripcion' => $curso_aux->descripcion,
          'precio' => $curso_aux->precio,
          'fecha_ini' => $curso_aux->fecha_ini,
          'creadopor' => $curso_aux->creadopor,
          'imagen' => $curso_aux->imagen
        );
        $this->load->view('compra', $curso);
      } elseif($this->input->post('compra') && isset($_SESSION['logged_in'])) {
        $id_curso_compra=$this->input->post('id_curso_compra');
        $curso_compra = $this->UM_Cursos->selectId($id_curso_compra);
        $fechahoy = date("y-m-d");
        $new_venta = array(
          'nombre_curso' => $curso_compra->nombre,
          'id_user' => $_SESSION['logged_in']['id'],
          'id_curso' => $id_curso_compra,
          'fecha_venta' => $fechahoy,
          'progreso' => "0"
        );
        if ($this->UM_Cursos->creaVenta($new_venta)) {
          redirect(base_url().'User/miperfil');;
        } else{
          return FALSE;
        }

      } else {
        redirect(base_url().'Inicio/index');
      }

    }



}
?>
