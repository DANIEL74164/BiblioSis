<?php
class EditarEliminar_model extends CI_Model{
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
    }
     
    public function Eliminarautor($id){
       $consulta=$this->db->query("DELETE FROM autor WHERE auto_id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
     public function Eliminarejem($id){
       $consulta=$this->db->query("DELETE FROM ejemplar WHERE ejem_id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
      public function Eliminaradmins($id){
       $consulta=$this->db->query("DELETE FROM usuarios WHERE usua_id=$id");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 
 
}
?>