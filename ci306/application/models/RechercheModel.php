<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheModel extends CI_Model {
    public function getFacture($numeroFacture)
    {
        $querry = $this->db->select('*')
                            ->from('V_facture')
                            ->where('Numero_facture',$numeroFacture)
                            ->get();
        return $querry->result();
    }

}