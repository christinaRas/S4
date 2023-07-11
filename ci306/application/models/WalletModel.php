<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WalletModel extends CI_Model {
    
    public function getWalletUser($idUser)
    {
        $this->db->select("*");
        $this->db->from("porte_feuille");
        $this->db->where("id_user",$idUser);
        $query = $this->db->get();
        $result = $query->result();
        return $result; 
    }
    public function getCode()
    {
        $this->db->select("*");
        $this->db->from("code_argent");
        $query =  $this->db->get();
        $result = $query->result();
        return $result; 
    }
}