<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Model extends CI_Model{
	 public function add_user($data){
        return $this->db->insert('usuario', $data);
    }
}
?>