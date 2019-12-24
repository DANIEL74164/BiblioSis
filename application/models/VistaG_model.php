<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class VistaG_model extends CI_Model
{
	
	public function getVista()
	{
		$this->db->select("*");
		$this->db->from("ejemplar");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function estado()
	{
		$this->db->select("*");
		$this->db->from("prestamo");
		$resultados = $this->db->get();
		return $resultados->result();
	}

}
?>