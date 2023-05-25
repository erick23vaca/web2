<?php
class Instructor extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  // funcion para insertar un instructor
  function insertar($datos){
    // active record -> codeigniter
    //sql inyeccion
    return $this->db->insert("instructor", $datos);

  }
  function obtenerTodos(){
    $listadoInstructores=$this->db->get("instructor");
    if ($listadoInstructores->num_rows()>0) {
      return $listadoInstructores->result();
    }else{
      return false;
    }
  }

}//cierre de la clase




 ?>
