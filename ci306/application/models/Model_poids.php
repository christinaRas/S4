<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_statistique extends CI_Model {

   public function getImc($userId)
   {
   $this->db->select('poids, taille');
        $this->db->from('description');
        $this->db->where('id_user', $userId);
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);

        $query = $this->db->get();
        $poids = $this->db->poids;
        $taille=  $this->db->taile/10;
        return  $taille / ($poids*$poids);
   }
}