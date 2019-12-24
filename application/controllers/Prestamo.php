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
	}
?>