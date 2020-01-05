<?php
class Editar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("EditarEliminar_model");
        $this->load->library("session");
    }
    /*
    public function index(){
         
        //array asociativo con la llamada al metodo
        //del modelo
        $usuarios["ver"]=$this->usuarios_model->ver();
         
        //cargo la vista y le paso los datos
        $this->load->view("usuarios_view",$usuarios);
    }
    public function mod($id_usuario){
        if(is_numeric($id_usuario)){
          $datos["mod"]=$this->Editarejemplarmodel->mod($id_usuario);
          $this->load->view('header');
          $this->load->view('admin_page');
          $this->load->view('editarejemplar',$datos);
          $this->load->view('footer'); 


          //$this->load->view("modificar_view",$datos);
          if($this->input->post("submit")){
                $mod=$this->Editarejemplarmodel->mod(
                        $id_usuario,
                        $this->input->post("submit"),
                        $this->input->post("email"),
                        $this->input->post("password"),
                        $this->input->post("nombre"),
                        $this->input->post("apellido")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Usuario modificado correctamente');
                }
                redirect(base_url());
            }
        }else{
            redirect(base_url());
        }
    }
    */
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
