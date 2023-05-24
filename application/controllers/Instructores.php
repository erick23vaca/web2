<?php
class Instructores extends CI_Controller{

    function __construct(){

        parent::__construct();
        // cargar modelo
        $this->load->model('Instructor');
    }
    /* fincion que renderisa la vista index */
    public function index(){

        $this->load->view('header');
        $this->load->view('instructores/index');
        $this->load->view('footer');


    }
    /* funcion que renderisa la vista nuevo */
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('instructores/nuevo');
        $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoInstructor=array(
        "cedula_ins"=>$this->input->post('cedula_ins'),
        "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
        "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
        "nombres_ins"=>$this->input->post('nombres_ins'),
        "titulo_ins"=>$this->input->post('titulo_ins'),
        "telefono_ins"=>$this->input->post('telefono_ins'),
        "direccion_ins"=>$this->input->post('direccion_ins'),
      );
      $this->Instructor->insertar($datosNuevoInstructor);
    }
}//cierre de la clase




?>
