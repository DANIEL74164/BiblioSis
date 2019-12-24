<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Peticiones extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Peticiones_model");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$data = array(
				'peticiones' => $this->Peticiones_model->getPeticiones()
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_peticiones",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
?>