<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelinsert_paiement extends CI_Model {

        $idEtat = 1;
        public function InsertPaiement($id_argent)
        {
            $sql="insert into Paiement(ID_ARGENT) values(".$IdUser.")";
            $query=$this->db->query($sql);
        }
}