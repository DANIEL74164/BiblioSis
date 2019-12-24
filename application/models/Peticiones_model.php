<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Peticiones_model extends CI_Model
{
	
	public function getPeticiones()
	{
		$this->db->select("p.*,e.ejem_titulo as ejemplar");
		$this->db->from("peticion p");
		$this->db->join("ejemplar e","p.peti_ejem_id = e.ejem_id");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
?>