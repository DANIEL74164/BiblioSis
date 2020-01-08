<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class EditarPeticion_model extends CI_Model
{
	
	public function Eliminar_Peticion($peticion)
	{	
		$this->db->delete("peticion",$peticion);
		$this->db->where("peti_id",$peticion);
	}
	public function datos_peticion($peticion)
	{	
		$this->db->select("*");
		$this->db->from("peticion");
		$this->db->where("peti_id",$peticion);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function Aprobar_Peticion($peticionID)
	{	
		return $this->db->insert("prestamo",$peticionID);
	}


}
?>