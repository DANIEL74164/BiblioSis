<?php
class EditarEliminar_model extends CI_Model{
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
    }
    /*
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM usuarios;");
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }

    public function mod($id_usuario,$titulo="NULL",$tipo="NULL",$categoria="NULL",$editorial="NULL",$idioma="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM ejemplar WHERE ejem_id=$id_usuario");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE ejemplar SET ejem_titulo='$titulo', ejem_editorial='$editorial', ejem_paginas='$paginas', ejem_isbn='$isbn', ejem_idioma='$idioma', ejem_portada='$portada', ejem_digital='$digital', ejem_audio='$audio', ejem_resumen='$resumen', ejem_tipo_id='$tipo', ejem_cate_id='$categoria', ejem_anio='$date' WHERE ejem_id=$id_usuario;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
    */
      public function getEjemDatos($id)
  {
    $this->db->select("*");
    $this->db->from("ejemplares");
    $resultados = $this->db->get();
    return $resultados->result();
    $this->db->UPDATE("*");
    $this->db->from("ejemplares");
    $this->db->WHERE("ejem_id",$id);
    $result= $this->db->get();
    return $result->result();
  }
     }
    public function Eliminarautor($id){
       $consulta=$this->db->query("DELETE FROM ejemplares WHERE ejem_id=$id");
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