<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda_model extends CI_Model
{
	
	public function selectBusqueda($Busqueda)
	{
		$this->db->select("e.*,c.cate_nombre as categoria,a.auto_nombres as autor_nom,a.auto_apellidos as autor_apell");
		$this->db->from("ejemplar e");
		$this->db->join("categoria c","e.ejem_cate_id = c.cate_id");
		$this->db->join("ejemplar_autor r","e.ejem_id = r.rela_ejem_id");
		$this->db->join("autor a","r.rela_auto_id = a.auto_id");
		$this->db->where("ejem_titulo",$Busqueda['ejem_titulo']);
		$this->db->where("cate_id",$Busqueda['ejem_cate_id']);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function selectFavoritos($Busqueda)
	{
		$this->db->select("f.*,e.ejem_titulo as TITULO,e.ejem_portada as PORTADA,e.ejem_resumen as RESUMEN,a.auto_nombres as autorNombre,a.auto_apellidos as autorApellido");//,p.pres_estado as ESTADO");
		$this->db->from("favorito f");
		$this->db->join("ejemplar e","f.favo_ejem_id = e.ejem_id");
		$this->db->join("ejemplar_autor r","e.ejem_id = r.rela_ejem_id");
		$this->db->join("autor a","e.ejem_id = a.auto_id");
		$this->db->where("favo_usua_id",$Busqueda['user_id']);
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
?>