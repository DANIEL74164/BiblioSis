<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Vistageneral extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("VistaG_model");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$data = array(
				'vistag' => $this->VistaG_model->getVista(),
				'estado' => $this->VistaG_model->estado()
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_vistageneral",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
?>