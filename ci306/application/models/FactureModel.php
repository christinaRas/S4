<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactureModel extends CI_Model {
    public function getFacture()
    {
        $querry = $this->db->select('*')
                            ->from('V_facture')
                            ->group_by('Numero_facture')
                            ->get();
        return $querry->result();
    }

}