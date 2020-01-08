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

	public function selectPrestamos($user)
	{
		$this->db->select("p.*,e.ejem_titulo as TITULO,e.ejem_portada as PORTADA,e.ejem_resumen as RESUMEN,a.auto_nombres as autorNombre,a.auto_apellidos as autorApellido");//,p.pres_estado as ESTADO");
		$this->db->from("prestamo p");
		$this->db->join("ejemplar e","p.pres_ejem_id = e.ejem_id");
		$this->db->join("ejemplar_autor r","e.ejem_id = r.rela_ejem_id");
		$this->db->join("autor a","e.ejem_id = a.auto_id");
		$this->db->where("pres_usua_id",$user['user_id']);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	
	public function selectPendientes($user)
	{
		$this->db->select("p.*,e.ejem_titulo as TITULO,e.ejem_portada as PORTADA,e.ejem_resumen as RESUMEN,a.auto_nombres as autorNombre,a.auto_apellidos as autorApellido");//,p.pres_estado as ESTADO");
		$this->db->from("peticion p");
		$this->db->join("ejemplar e","p.peti_ejem_id = e.ejem_id");
		$this->db->join("ejemplar_autor r","e.ejem_id = r.rela_ejem_id");
		$this->db->join("autor a","e.ejem_id = a.auto_id");
		$this->db->where("peti_usua_id",$user['user_id']);
		$resultados = $this->db->get();
		return $resultados->result();
	}

}
?>