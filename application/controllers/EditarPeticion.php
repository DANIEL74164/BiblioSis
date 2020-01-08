<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class EditarPeticion extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model("EditarPeticion_model");
            //$this->load->model("Busqueda_model");
            $this->load->helper("url");
		}
		/*
		public function Generar($key){
			if ($_SESSION['usua_nombres']) {

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
            	
                redirect(base_url()."BuscarLibro","location");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function EliminarFavorito($value){
			if ($_SESSION['usua_nombres']) {

            	$usuario = $_SESSION['usua_id'];
            	$ejemplar = $value;

				$dias = [
                'favo_usua_id' => $usuario,
                'favo_ejem_id' => $ejemplar,
            	];

            	$insert_dias = $this->Crear_model->EliminarFavorito($dias);

                redirect(base_url()."Generarpeticion/GenerarFavoritos","location");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function GenerarFavoritos(){
			if ($_SESSION['usua_nombres']) {

				$usuario = $_SESSION['usua_id'];

				$Busqueda = [
                'user_id' => $usuario
            	];
            	
                $dato = array(
                'SeleccionFavoritos' => $this->Busqueda_model->selectFavoritos($Busqueda),
                );
                
				$this->load->view("includes/header");
				$this->load->view("includes/sidebar_user");
				$this->load->view("user_favoritos",$dato);
				$this->load->view("includes/footer");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
		*/

		public function EliminarPeticion($id){
			if ($_SESSION['usua_nombres']) {

            	$peticion = $id;

				$eliminar = [
                'peti_id' => $peticion,
            	];

            	$eliminar_peticion = $this->EditarPeticion_model->Eliminar_Peticion($eliminar);

                redirect(base_url()."Peticiones");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function EliminarPeticionUser($id){
			if ($_SESSION['usua_nombres']) {

            	$peticion = $id;

				$eliminar = [
                'peti_id' => $peticion,
            	];

            	$eliminar_peticion = $this->EditarPeticion_model->Eliminar_Peticion($eliminar);

                redirect(base_url()."Prestamo/GenerarPrestamos");
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

		public function PrestarPeticion($id){
			if ($_SESSION['usua_nombres']) {

            	$peticion = $id;
            	
            	$datos = $this->EditarPeticion_model->datos_Peticion($peticion);
            	
            	foreach($datos as $value) {
            		
                    $peticion_ejem=$value->peti_ejem_id;
                    $peticion_dias=$value->peti_dias;
                    $peticion_usua=$value->peti_usua_id;
                    $peticion_fecha=$value->peti_fechareg;
                   	$fecha_prestamo=date('Y-m-d');
                    $fecha_devolucion=date('Y-m-d',strtotime("$fecha_prestamo + $peticion_dias"));
                    $estado=0;
                    $peticionID= array(
                      'pres_usua_id' => $peticion_usua,
                      'pres_ejem_id' => $peticion_ejem,
                      'pres_fechareg' => $peticion_fecha,
                      'pres_dias' => $peticion_dias,
                      'pres_fechaprestamo' => $fecha_prestamo=date('Y-m-d'),
                      'pres_fechadevolucion' => $fecha_devolucion=date('Y-m-d',strtotime("$fecha_prestamo + $peticion_dias days")),
                      'pres_estado' => $estado
                    );

                $insert_datos = $this->EditarPeticion_model->Aprobar_Peticion($peticionID);

                $eliminar = [
                'peti_id' => $peticion,
            	];


                $eliminar_peticion = $this->EditarPeticion_model->Eliminar_Peticion($eliminar);

                if ($insert_datos) {
                    redirect(base_url()."Peticiones");
                	}
                                    
            	}
            	
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}

	}
?>