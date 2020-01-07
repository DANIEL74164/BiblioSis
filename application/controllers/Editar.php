<?php
class Editar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("EditarEliminar_model");
        $this->load->library("session");
    }
    public function EliminarEjemplar($id){
        if(is_numeric($id)){
          $eliminar=$this->EditarEliminar_model->EliminarEjm($id);
          if($eliminar==true){
              $this->load->view("includes/header");
              $this->load->view("includes/sidebar");
              $this->load->view("admin_autores");
              $this->load->view("includes/footer");
          }
        }
    }
}
?>
