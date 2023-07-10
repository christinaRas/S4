<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

        public function InsertPaiement($IdUser,$IdArgent,$idEtat)
        {
            $sql="insert into user values(null,'".$nom."','".$email."','".$mdp."')";
            $query=$this->db->query($sql);
        }
}