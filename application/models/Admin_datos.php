<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_datos extends CI_Model
{
	
	public function getAdminDatos()
	{
		$this->db->select("*");
		$this->db->from("usuario");
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function loginAdmin(){

			$this->db->select("*");
			$this->db->from("usuario");
			$this->db->where("usua_login",$data['username']);
			$this->db->where("usua_password",$data['password']);
			$query=$this->db->get();
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return null;
			}
		}
}
?>