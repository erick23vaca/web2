<?php
class Cursos extends CI_Controller{

    function __construct(){

        parent::__construct();
        // cargar modelo
        $this->load->model('Curso');
    }
    /* fincion que renderisa la vista index */
    public function index(){

        $this->load->view('header');
        $this->load->view('cursos/index');
        $this->load->view('footer');


    }
    /* funcion que renderisa la vista nuevo */
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('cursos/nuevo');
        $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoCurso=array(
        "nombre_cur"=>$this->input->post('nombre_cur'),
        "especialidad_cur"=>$this->input->post('especialidad_cur'),
        "horario_cur"=>$this->input->post('horario_cur'),
        "precio_cur"=>$this->input->post('precio_cur'),
        "aula_cur"=>$this->input->post('aula_cur'),
      );
      $this->Curso->insertar($datosNuevoCurso);
    }
}//cierre de la clase




?>
