<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Crear extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Crear_model");
            $this->load->model("Autores_model");
		}

		public function CrearEjemplarPage(){
			if ($_SESSION['usua_nombres']) {

                $dato = array(
                'seleccionautor' => $this->Autores_model->selectA(),
                'selecciontipo' => $this->Autores_model->selectT(),
                'seleccioncategoria' => $this->Autores_model->selectC()
                );

				$this->load->view("includes/header");
				$this->load->view("includes/sidebar");
				$this->load->view("admin_crearejemplar",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

        public function CrearAutorPage(){
            if ($_SESSION['usua_nombres']) {
                $this->load->view("includes/header");
                $this->load->view("includes/sidebar");
                $this->load->view("admin_crearautor");
                $this->load->view("includes/footer");
            }else{
                redirect(base_url()."Dashboard/login","location");
            }
        }

        public function CrearAutorP(){
            if ($_SESSION['usua_nombres']) {

                $nombresA = $this->input->post('nombres');
                $apellidosA = $this->input->post('apellidos');
                $biografiaA = $this->input->post('biografia');

                $datosautor = [
                'auto_nombres' => $nombresA,
                'auto_apellidos' => $apellidosA,
                'auto_biografia' => $biografiaA
                ];

                $insert_datos = $this->Crear_model->CrearA($datosautor);
                if ($insert_datos) {
                    redirect(base_url()."Autores");
                }
            }else{
                redirect(base_url()."Dashboard/login","location");
            }

        }

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
	}
?>