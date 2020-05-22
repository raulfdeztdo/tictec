<?php
  class Cursos_Model extends CI_Model {

    var $id;
    var $nombre;
    var $categoria;
    var $descripcion;
    var $precio;
    var $fecha_ini;
    var $user_creador;
    var $imagen;


    public function getAll(){
      $result = $this->db->get('cursos');
      $cursos = $result->result_array();
      return $cursos;
    }
    public function ultimos3(){
      $query = $this->db->query("SELECT * FROM cursos ORDER BY fecha_ini DESC LIMIT 3");
      $ultimos3 = $query->result_array();
      return $ultimos3;
    }

    public function obtenerCategoria($cat){
      $query2 = $this->db->query("SELECT * FROM cursos WHERE categoria = '$cat' ORDER BY fecha_ini DESC");
      $categoria = $query2->result_array();
      return $categoria;
    }

    public function selectCat($cat){
      $this->db->select('*');
      $this->db->from('cursos');
      $this->db->where('categoria', $cat);
      $query = $this->db->get();

      $curso = array();
      $rows = $query->result();
      for ($i=0; $i < $query->num_rows() ; $i++) {
        $curso[$i]['id_curso'] = $rows[$i]->id_curso;
        $curso[$i]['nombre'] = $rows[$i]->nombre;
        $curso[$i]['categoria'] = $rows[$i]->categoria;
        $curso[$i]['descripcion'] = $rows[$i]->descripcion;
        $curso[$i]['precio'] = $rows[$i]->precio;
        $curso[$i]['fecha_ini'] = $rows[$i]->fecha_ini;
        $curso[$i]['creadopor'] = $rows[$i]->creadopor;
        $curso[$i]['imagen'] = $rows[$i]->imagen;
      }

      return $curso;
    }

    public function selectId($id) {
        $this->db->select('id_curso, nombre, categoria, descripcion, precio, fecha_ini, creadopor, imagen');
        $this->db->from('cursos');
        $this->db->where('id_curso', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
          $rows = $query->result();
          $this->id_curso = $rows[0]->id_curso;
          $this->nombre = $rows[0]->nombre;
          $this->categoria = $rows[0]->categoria;
          $this->descripcion = $rows[0]->descripcion;
          $this->precio = $rows[0]->precio;
          $this->fecha_ini = $rows[0]->fecha_ini;
          $this->creadopor = $rows[0]->creadopor;
          $this->imagen = $rows[0]->imagen;

          return $this;
        }
        return FALSE;
    }

    public function selectCursosUser($id_user) {
        $this->db->select('id_venta, nombre_curso, id_user, id_curso, fecha_venta, progreso');
        $this->db->from('ventas_cursos');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        $cursos_user = array();
        if ($query->num_rows() > 0) {
          $rows = $query->result();
          for ($i=0; $i < $query->num_rows() ; $i++) {
            $cursos_user[$i]['id_venta'] = $rows[$i]->id_venta;
            $cursos_user[$i]['nombre_curso'] = $rows[$i]->nombre_curso;
            $cursos_user[$i]['id_user'] = $rows[$i]->id_user;
            $cursos_user[$i]['id_curso'] = $rows[$i]->id_curso;
            $cursos_user[$i]['fecha_venta'] = $rows[$i]->fecha_venta;
            $cursos_user[$i]['progreso'] = $rows[$i]->progreso;
          }
          return $cursos_user;
        }
        return FALSE;
    }

    public function creaCurso($curso){
      $this->db->insert('cursos', $curso);
      return $this->db->affected_rows() > 0;
    }

    public function creaVenta($venta){
      $this->db->insert('ventas_cursos', $venta);
      return $this->db->affected_rows() > 0;
    }

    public function selectCursosProf($nombre) {
        $this->db->select('id_curso, nombre, categoria, descripcion, precio, fecha_ini, creadopor, imagen');
        $this->db->from('cursos');
        $this->db->where('creadopor', $nombre);
        $query = $this->db->get();
        $cursos_prof = array();
        if ($query->num_rows() > 0) {
          $rows = $query->result();
          for ($i=0; $i < $query->num_rows() ; $i++) {
            $cursos_prof[$i]['id_curso'] = $rows[$i]->id_curso;
            $cursos_prof[$i]['nombre'] = $rows[$i]->nombre;
            $cursos_prof[$i]['categoria'] = $rows[$i]->categoria;
            $cursos_prof[$i]['decripcion'] = $rows[$i]->descripcion;
            $cursos_prof[$i]['precio'] = $rows[$i]->precio;
            $cursos_prof[$i]['fecha_ini'] = $rows[$i]->fecha_ini;
            $cursos_prof[$i]['creadopor'] = $rows[$i]->creadopor;
            $cursos_prof[$i]['imagen'] = $rows[$i]->imagen;
          }
          return $cursos_prof;
        }
        return FALSE;
    }

  } // FINAL MODELO
?>
