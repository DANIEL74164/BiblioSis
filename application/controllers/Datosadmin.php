<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Datosadmin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Admin_datos");
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {
				$nombre=$_SESSION['usua_id'];
				$data = array(
				'datosadmin' => $this->Admin_datos->getAdminDatos($nombre)
			);
			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_datos",$data);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

	}
?>