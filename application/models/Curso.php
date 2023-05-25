<?php
class Curso extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function insertar($datos){

    return $this->db->insert("curso", $datos);

  }
  function obtenerTodos(){
    $listadoCursos=$this->db->get("curso");
    if ($listadoCursos->num_rows()>0) {
      return $listadoCursos->result();
    }else{
      return false;
    }
  }
}//cierre de la clase




 ?>
