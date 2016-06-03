<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Responsable_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
     public function getAll(){
        $query=$this->db->query("select * from Responsables where estado='activo'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }
}