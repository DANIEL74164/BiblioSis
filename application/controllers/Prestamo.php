<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Prestamo extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Prestamo_model");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$data = array(
				'prestamo' => $this->Prestamo_model->getPrestamo()
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_prestamo",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function GenerarPrestamos(){
			if ($_SESSION['usua_nombres']) {

				$usuario = $_SESSION['usua_id'];

				$user = [
                'user_id' => $usuario
            	];
            	
                $dato = array(
                	'Pendientes' => $this->Prestamo_model->selectPendientes($user),
                	'Prestamos' => $this->Prestamo_model->selectPrestamos($user),
                );
                
				$this->load->view("includes/header");
				$this->load->view("includes/sidebar_user");
				$this->load->view("user_prestados",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

	}
?>