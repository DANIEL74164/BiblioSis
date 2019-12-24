<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Autores_model extends CI_Model
{
	
	public function getAutores()
	{
		$this->db->select("*");
		$this->db->from("autor");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function selectA()
	{
		$this->db->select("*");
		$this->db->from("autor");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function selectT()
	{
		$this->db->select("*");
		$this->db->from("ejemplar_tipo");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function selectC()
	{
		$this->db->select("*");
		$this->db->from("categoria");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
?>