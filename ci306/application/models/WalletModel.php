<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WalletModel extends CI_Model {
    
    public function getWalletUser($idUser)
    {
        $this->db->select("*");
        $this->db->from("PORTE_FEUILLE");
        $this->db->where("id_user",$idUser);
        $query = $this->db->get();
        $result = $query->result();
        return $result; 
    }
}