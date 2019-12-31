<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Portada_model extends CI_Model
{
	
	public function getEjemplarArea()
	{
		$this->db->select("e.*,c.cate_nombre as categoria,t.tipo_nombre as area,a.auto_nombres as autor_nom,a.auto_apellidos as autor_apell");
		$this->db->from("ejemplar e");
		$this->db->join("categoria c","e.ejem_cate_id = c.cate_id");
		$this->db->join("ejemplar_tipo t","e.ejem_tipo_id = t.tipo_id");
		$this->db->join("ejemplar_autor r","e.ejem_id = r.rela_ejem_id");
		$this->db->join("autor a","r.rela_auto_id = a.auto_id");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
?>