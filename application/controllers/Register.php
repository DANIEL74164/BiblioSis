<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Register_Model");
		
			$this->load->view("Register");
			$this->load->view("includes/footer");
		}

		public function index(){
			
			$codigo = $this->input->post('codigo');
            $nombres = $this->input->post('nombres');
            $apellidos = $this->input->post('apellidos');
            $direccion = $this->input->post('direccion');
            $usuario = $this->input->post('usuario');
            $contraseña = $this->input->post('password');
            $email = $this->input->post('email');
            $telefono = $this->input->post('telefono');
            
            $data = [
                'usua_login' => $usuario, 'usua_password' => $contraseña, 'usua_codigo' => $codigo, 'usua_nombres' => $nombres, 'usua_apellidos' => $apellidos, 'usua_direccion' => $direccion, 'usua_email' => $email, 'usua_telefono' => $telefono];
             
            $this->Register_Model->add_user($data);
           
				}
			
			
		}

	
?>