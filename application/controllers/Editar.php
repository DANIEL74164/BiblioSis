<?php
class Editar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("EditarEliminar_model");
        $this->load->library("session");
    }
<<<<<<< HEAD
    public function EliminarEjemplar($id){
=======
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
    public function EditarEjemplar($id){
           
      $this->load->view("includes/header");
      $this->load->view("includes/sidebar");
      $this->load->view("admin_editar_ejemplar",$data);
      $this->load->view("includes/footer");
       $data = array(
        'datosejem' => $this->EditarEliminar_model->getEjemDatos()
    }

    public function EliminarEjem($id){
>>>>>>> 5f7d0011a39d09e9ddb6cd421c302ee38eb7ff9c
        if(is_numeric($id)){
          $eliminar=$this->EditarEliminar_model->Eliminarejem($id);
          
          redirect(base_url() . 'dashboard/admin_ejemplares');        }
    }
}
?>
