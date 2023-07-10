<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProduitModel extends CI_Model {
    public function getProduit()
    {
        $querry = $this->db->select('*')
                            ->from('produit')
                            ->get();
        return $querry->result();
    }
}