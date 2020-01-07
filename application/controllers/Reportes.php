<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Reportes extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			if ($_SESSION['usua_nombres']) {

			$this->load->view("includes/header");
			$this->load->view("includes/sidebar");
			$this->load->view("admin_reportes"/*,$data*/);
			$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
?>