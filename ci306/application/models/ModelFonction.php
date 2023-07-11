<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelFonction extends CI_Model {
    public function getId($code)
    {
         $this->db->select('id_argent');
                $this->db->from("code_argent");
                $this->db->where('code',$code);
        $query = $this->db->get();        
        $result = $query->result(); 

    }
    
}