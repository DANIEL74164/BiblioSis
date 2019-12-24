<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Ejemplares extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Ejemplar_model");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$data = array(
				'ejemplares' => $this->Ejemplar_model->getEjemplar()
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_ejemplares",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
?>