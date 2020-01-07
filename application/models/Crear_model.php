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
	public function insertDias($n_dias)
	{	
		$this->db->insert("peticion",$n_dias);
	}
	public function insertFavorito($ejemplar)
	{	
		$this->db->insert("favorito",$ejemplar);
	}
	public function EliminarFavorito($ejemplar)
	{	
		$this->db->delete("favorito",$ejemplar);
		$this->db->where("favo_usua_id",$usuario);
		$this->db->where("favo_ejem_id",$ejemplar);
	}
	public function EliminarHistorial($ejemplar)
	{	
		$this->db->delete("historial",$ejemplar);
		//$this->db->where("favo_usua_id",$usuario);
		$this->db->where("histo_id",$ejemplar);
	}
}
?>