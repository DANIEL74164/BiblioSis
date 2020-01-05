<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Generarpeticion extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model("Crear_model");
            //$this->load->model("Busqueda_model");
		}
		/*
		public function index(){
			if ($_SESSION['usua_nombres']) {

                $dato = array(
                //'seleccionautor' => $this->Autores_model->selectA(),
                //'selecciontipo' => $this->Autores_model->selectT(),
                'seleccioncategoria' => $this->Autores_model->selectC()
                );

				$this->load->view("includes/header");
				$this->load->view("includes/sidebar_user");
				$this->load->view("user_buscarlibro",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
		*/

		public function Generar($key){
			if ($_SESSION['usua_nombres']) {

				//$ = $this->input->post('titulo');
				$n_dias = $this->input->post('dias');
            	$usuario = $_SESSION['usua_id'];
            	$ejemplar = $key;
            	$fecha = date('Y-m-d-H-i');

				$dias = [
                'peti_dias' => $n_dias,
                'peti_usua_id' => $usuario,
                'peti_ejem_id' => $ejemplar,
                'peti_fechareg' => $fecha
            	];
            	$insert_dias = $this->Crear_model->insertDias($dias);
            	
                //$dato = array(
                //'seleccion_busqueda' => $this->Busqueda_model->selectBusqueda($Busqueda),
                //'seleccioncategoria' => $this->Autores_model->selectC()
                //'selecciontipo' => $this->Autores_model->selectT(),
                //'seleccioncategoria' => $this->Autores_model->selectC()
                //);
                redirect(base_url()."BuscarLibro","location");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function Favorito($key){
			if ($_SESSION['usua_nombres']) {

				//$ = $this->input->post('titulo');
				//$n_dias = $this->input->post('dias');
            	$usuario = $_SESSION['usua_id'];
            	$ejemplar = $key;
            	//$fecha = date('Y-m-d-H-i');

				$dias = [
                //'peti_dias' => $n_dias,
                'favo_usua_id' => $usuario,
                'favo_ejem_id' => $ejemplar,
                //'peti_fechareg' => $fecha
            	];
            	$insert_dias = $this->Crear_model->insertDias($dias);
            	
                //$dato = array(
                //'seleccion_busqueda' => $this->Busqueda_model->selectBusqueda($Busqueda),
                //'seleccioncategoria' => $this->Autores_model->selectC()
                //'selecciontipo' => $this->Autores_model->selectT(),
                //'seleccioncategoria' => $this->Autores_model->selectC()
                //);
                redirect(base_url()."BuscarLibro","location");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

	}
?>