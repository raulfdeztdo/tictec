<?php
  class Usuarios_Model extends CI_Model {

    var $id;
    var $name;
    var $email;
    var $group;
    var $f_nac;

    public function __construct ()
    {
        parent :: __construct ();
    }

    public function getAll ()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function authenticate($user, $password){
      $this->db->select('id_user, email, nombre, group, f_nac');
      $this->db->from('user');
      $this->db->where('nombre', $user);
      $this->db->where('password', hash('sha256', $password));
      //$this->db->where('password', hash('sha256', $password));
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->id_user;
        $this->nombre = $rows[0]->nombre;
        $this->email = $rows[0]->email;
        if ($rows[0]->group == "1") {
          $this->group = "Estudiante";
        } elseif ($rows[0]->group == "2") {
          $this->group = "Profesor";
        } else {
          $this->group = "Admin";
        }
        $this->f_nac = $rows[0]->f_nac;

        return $this;
      }
      return FALSE;
    }

    public function upduser($user_act){

      $this->db->where('id_user', $user_act['id_user']);
      $this->db->update('user',$user_act);
			return true;

    }

    public function selectuser($id){
      $this->db->select('id_user, email, nombre, group, f_nac');
      $this->db->from('user');
      $this->db->where('id_user', $id);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        $rows = $query->result();
        $this->id = $rows[0]->id_user;
        $this->nombre = $rows[0]->nombre;
        $this->email = $rows[0]->email;
        if ($rows[0]->group == "1") {
          $this->group = "Estudiante";
        } elseif ($rows[0]->group == "2") {
          $this->group = "Profesor";
        } else {
          $this->group = "Admin";
        }
        $this->f_nac = $rows[0]->f_nac;

        return $this;
      }
      return FALSE;
    }

    public function creauser($user){
      $this->db->insert('user', $user);
      return $this->db->affected_rows() > 0;
    }

    public function checkNombreUsuario($usuario){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('nombre', $usuario);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        return TRUE;
      }
      return FALSE;
    }

    public function checkEmail($email){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('email', $email);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        return TRUE;
      }
      return FALSE;
    }

  }
?>
