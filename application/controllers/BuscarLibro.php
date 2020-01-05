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

		public function BusquedaLibros(){
			if ($_SESSION['usua_nombres']) {

				$Buscar_titulo = $this->input->post('titulo');
				$Buscar_categoria = $this->input->post('categoria');
            	//$editorial = $this->input->post('editorial');

				$Busqueda = [
                'ejem_titulo' => $Buscar_titulo,
                'ejem_cate_id' => $Buscar_categoria
            	];
            	//$Buscar_datos = $this->Busqueda_model->CrearEjem($data);
            	
                $dato = array(
                'seleccion_busqueda' => $this->Busqueda_model->selectBusqueda($Busqueda),
                'seleccioncategoria' => $this->Autores_model->selectC()
                //'selecciontipo' => $this->Autores_model->selectT(),
                //'seleccioncategoria' => $this->Autores_model->selectC()
                );
                

				$this->load->view("includes/header");
				$this->load->view("includes/sidebar_user");
				$this->load->view("user_busqueda",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

	}
?>