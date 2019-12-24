<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamo_model extends CI_Model
{
	
	public function getPrestamo()
	{
		$this->db->select("p.*,u.usua_nombres as usuario,e.ejem_titulo as libro");
		$this->db->from("prestamo p");
		$this->db->join("usuario u","p.pres_usua_id = u.usua_id");
		$this->db->join("ejemplar e","p.pres_ejem_id = e.ejem_id");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
?>