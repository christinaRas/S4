<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {
    public function getFacture($nom,$prenom)
    {
        $querry = $this->db->select('*')
                            ->from('v_facture')
                            ->where('Nom',$nom)
                            ->where('Prenom',$prenom)
                            ->get();
        return $querry->result();
    }
    public function getFactureProduit($produit)
    {
        $querry = $this->db->select('*')
                        ->from('v_facture')
                        ->like('produit',$produit)
                        ->get();
        return $querry->result();                
    }

}