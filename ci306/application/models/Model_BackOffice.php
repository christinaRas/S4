<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_BackOffice extends CI_Model {
    public function getNonValid()
{
    $this->db->select('*');
    $this->db->from('PAIEMENT');
    $this->db->where('ETAT', 1);
    $query = $this->db->get();
    $result = $query->result();

    return $result;
}

    public function validationCode($id)
    {
        $this->db->where('ID_PAIEMENT',$id);
        $this->db->set('ETAT',2);
        $this->db->update('PAIEMENT');
    }
}