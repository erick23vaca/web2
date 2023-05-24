<?php
class Curso extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  // funcion para insertar un instructor
  function insertar($datos){
    // active record -> codeigniter
    //sql inyeccion
    return $this->db->insert("curso", $datos);

  }
}//cierre de la clase




 ?>
