<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Crear_model extends CI_Model
{
	
	public function CrearEjem($data)
	{
		return $this->db->insert('ejemplar',$data);
	}
	public function CrearAutor($dato)
	{
		return $this->db->insert('ejemplar_autor',$dato);
	}
	public function crearA($datosautor)
	{
		return $this->db->insert('autor',$datosautor);
	}
	public function insertDias($ejemplar)
	{	
		$this->db->insert("favorito",$ejemplar);
	}
}
?>