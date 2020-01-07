<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class BuscarLibro extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model("Autores_model");
            $this->load->model("Busqueda_model");
		}

		public function index(){
			if ($_SESSION['usua_nombres']) {

                $dato = array(
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

		public function BusquedaLibros(){
			if ($_SESSION['usua_nombres']) {

				$Buscar_titulo = $this->input->post('titulo');
				$Buscar_categoria = $this->input->post('categoria');
            	$usuario = $_SESSION['usua_id'];
            	$fecha = date('Y-m-d-H-i');

				$Busqueda = [
                'ejem_titulo' => $Buscar_titulo,
                'ejem_cate_id' => $Buscar_categoria
            	];
           
            	$historial = [
                'histo_usua_id' => $usuario,
                'histo_termino' => $Buscar_titulo,
                'histo_fechareg' => $fecha
                ];

                $insert_historial = $this->Busqueda_model->insertHistorial($historial);

                $dato = array(
                'seleccion_busqueda' => $this->Busqueda_model->selectBusqueda($Busqueda),
                'seleccioncategoria' => $this->Autores_model->selectC()
                );
                

				$this->load->view("includes/header");
				$this->load->view("includes/sidebar_user");
				$this->load->view("user_busqueda",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function HistorialBusqueda(){
			if ($_SESSION['usua_nombres']) {

				$usuario = $_SESSION['usua_id'];
			
				$user_historial = [
                'histo_usua_id' => $usuario,
            	];
            	
                $dato = array(
                'historial' => $this->Busqueda_model->getHistorial($user_historial),
                );
                

				$this->load->view("includes/header");
				$this->load->view("includes/sidebar_user");
				$this->load->view("user_historial",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
?>