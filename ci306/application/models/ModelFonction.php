<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelFonction extends CI_Model {
    public function getId($code)
    {
         $this->db->select('ID_ARGENT');
                $this->db->from("CODE_ARGENT");
                $this->db->where('CODE',$code);
        $query = $this->db->get();        
        $result = $query->result(); 

    }
    
}