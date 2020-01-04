<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Portada extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Portada_model");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$data = array(
				'ejemplares' => $this->Portada_model->getEjemplarArea(),
				'area_1' => $this->Portada_model->getEjemplarArea_1(),
				'area_2' => $this->Portada_model->getEjemplarArea_2(),
				'area_3' => $this->Portada_model->getEjemplarArea_3()
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar_user");
			$this->load->view("user_portada",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
?>