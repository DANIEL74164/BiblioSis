<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Autores extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Autores_model");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$data = array(
				'autores' => $this->Autores_model->getAutores()
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_autores",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

	}
?>