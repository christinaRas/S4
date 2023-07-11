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
    public function getWalletUser1($idUser)
    {
        $this->db->select("total");
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
    public function prixParDuree($semaine)
    {
        $prix = 10000;
            
            return $prix*$semaine;
    }
    public function deductionPrixDuree($id, $duree)
    {
        $prix = $this->prixParDuree($duree);
        $wallet = $this->getWalletUser1($id);
        $reste = $wallet - $prix;
        
        $data = array(
            'etat' => $reste
        );
    
        $this->db->where('id_paiement', $id);
        $this->db->update('paiement', $data);
    }
    

}