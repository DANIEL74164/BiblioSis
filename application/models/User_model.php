<?php 

	class User_model extends CI_Model {

		public function loginUser($data){

			$this->db->select("*");
			$this->db->from("usuario");
			$this->db->where("usua_login",$data['username']);
			$this->db->where("usua_password",$data['password']);
			$this->db->where("usua_esadmin",$data['checkbox']);

			$query=$this->db->get();
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return null;
			}
		}
		
		public function loginAdmin($data){

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
