<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->loadViews("home");
	}
	public function login(){

		$this->load->library('session');
		$this->load->model('User_model');

		//empezar con 0 para verificar al usuario y podemos empezar con el checkbox == 1 o a == 0 , para luego verificar al usuario mediante si es administrador o no

		if ($_POST['checkbox'] == 1) {
			if($_POST['username'] && $_POST['password']) {
			$login=$this->User_model->loginUser($_POST);
			
			if ($login) {
					$array=array(
					//"usua_codigo"=>$login[0]->usua_codigo,
					"usua_nombres"=>$login[0]->usua_nombres,
					"usua_apellidos"=>$login[0]->usua_apellidos,
					"usua_esadmin"=>$login[0]->usua_esadmin
					//"usua_email"=>$login[0]->usua_email,
					//"usua_telefono"=>$login[0]->usua_telefono
					);
					$this->session->set_userdata($array);
				
				}
			//
			}
		}else{
			if($_POST['username'] && $_POST['password']) {
			$login=$this->User_model->loginAdmin($_POST);
			
			if ($login) {
					$array=array(
					//"usua_codigo"=>$login[0]->usua_codigo,
					"usua_nombres"=>$login[0]->usua_nombres,
					"usua_apellidos"=>$login[0]->usua_apellidos,
					//"usua_esadmin"=>$login[0]->usua_esadmin
					//"usua_email"=>$login[0]->usua_email,
					//"usua_telefono"=>$login[0]->usua_telefono
				);
				$this->session->set_userdata($array);
				
			}
			//
		}

		}
		//
		/*
		if($_POST['username'] && $_POST['password']) {
			$login=$this->User_model->loginUser($_POST);
			
			if ($login) {
					$array=array(
					//"usua_codigo"=>$login[0]->usua_codigo,
					"usua_nombres"=>$login[0]->usua_nombres,
					"usua_apellidos"=>$login[0]->usua_apellidos
					//"usua_esadmin"=>$login[0]->usua_esadmin,
					//"usua_email"=>$login[0]->usua_email,
					//"usua_telefono"=>$login[0]->usua_telefono
				);
				$this->session->set_userdata($array);
				
			}
			//
		}
		*/
		//
		$this->loadViews('login');
	}

	function loadViews($view,$datos=null){

		$this->load->library('session');
		//añadir $_session[usua_esadmin] == 1 y cambiar la ruta
//
		if ($_SESSION['usua_esadmin']==1) {

				if ($_SESSION['usua_nombres']) {

				if ($view=="login") {
					redirect(base_url()."Dashboard","location");
				}

				$this->load->view('includes/header');
				$this->load->view('includes/sidebar');
				$this->load->view('home');
				$this->load->view('includes/footer');
			}else{
				if ($view=="login") {
					$this->load->view($view);
				}else{
					redirect(base_url()."Dashboard/login","location");
				}
			}


		}else{

				if ($_SESSION['usua_nombres']) {

				if ($view=="login") {
					redirect(base_url()."Dashboard","location");
				}

				$this->load->view('includes/header');
				$this->load->view('includes/sidebar_user');
				$this->load->view('home_user');
				$this->load->view('includes/footer');
			}else{
				if ($view=="login") {
					$this->load->view($view);
				}else{
					redirect(base_url()."Dashboard/login","location");
				}
			}

		}

//
		/*

		if ($_SESSION['usua_nombres'] && $_SESSION['usua_esadmin']==1) {

			if ($view=="login") {
				redirect(base_url()."Dashboard","location");
			}

			$this->load->view('includes/header');
			$this->load->view('includes/sidebar');
			$this->load->view('home');
			$this->load->view('includes/footer');
		}else{
			if ($view=="login") {
				$this->load->view($view);
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
//
*/
}

	
	function logout() {
		$this->load->library('session');
        $this->session->sess_destroy($login);
        redirect(base_url()."Dashboard/login","location");
    }
}
?>