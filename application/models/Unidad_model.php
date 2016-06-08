<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Unidad_model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
     public function getAll(){
        $query=$this->db->query("select * from Unidades where estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }
    
    public function findbyid($id){
        $query=$this->db->query("select * from Unidades where servicio_id='".$id."' and estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
}

