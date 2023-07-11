<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_BackOffice extends CI_Model {
    public function getNonValid()
{
    $this->db->select('*');
    $this->db->from('paiement');
    $this->db->where('etat', 1);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
}

    public function validationCode($id)
    {
        $this->db->where('id_paiement',$id);
        $this->db->set('etat',2);
        $this->db->update('paiement');
    }
    public function countClient()
    {
        $this->db->select("*");
        $this->db->from("v_nombreclient");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function listeClient()
    {
        $this->db->select("*");
        $this->db->from("user");
        $query = $this->db->get();
        $result = $query->result();
        return $result; 
    }
}