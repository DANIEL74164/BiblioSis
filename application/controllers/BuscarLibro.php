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


		/*
		public function CrearEjemplar()
		{
			if ($_SESSION['usua_nombres']) {
				
				$titulo = $this->input->post('titulo');
				$autor = $this->input->post('autor');
            	$editorial = $this->input->post('editorial');
            	$paginas = $this->input->post('paginas');
            	$isbn = $this->input->post('isbn');
            	$idioma = $this->input->post('idioma');
            	$portada = $this->input->post('portada');
            	$resumen = $this->input->post('resumen');
            	$tipo = $this->input->post('tipo');
            	$categoria = $this->input->post('categoria');
            	$date = $this->input->post('date');

            	$data = [
                'ejem_titulo' => $titulo,
                'ejem_editorial' => $editorial,
                'ejem_paginas' => $paginas,
                'ejem_isbn' => $isbn,
                'ejem_idioma' => $idioma,
                'ejem_portada' => $portada,
                'ejem_resumen' => $resumen,
                'ejem_tipo_id' => $tipo,
                'ejem_cate_id' => $categoria,
                'ejem_anio' => $date
            	];
            	$insert_data = $this->Crear_model->CrearEjem($data);
            	if ($insert_data) {

            		$autor = $this->input->post('autor');
            		$dato = [
                		'rela_auto_id' => $autor,
                		'rela_ejem_id' => $this->db->insert_id()
            		];
            		$insert_autor = $this->Crear_model->CrearAutor($dato);

                	redirect(base_url()."Ejemplares");
            	}
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
		*/


	}
?>