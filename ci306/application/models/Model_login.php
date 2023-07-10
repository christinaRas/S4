<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    public function checkLogin($mail, $pass)
    {
        $valiny = false;
        $sql = "SELECT * FROM user WHERE mail = ? AND mdp = ?";
        $query = $this->db->query($sql, array($mail, $pass));
        
        if ($query->num_rows() > 0) {
            $row = $query->row_array();
            $valiny = true;
            // Ne chargez pas la bibliothèque 'session' ici
            
            // Vous pouvez retourner les données utilisateur directement depuis le modèle
            $userData = array(
                'id_user' => $row['id_user'],
                'nom_user' => $row['nom_user']
            );
            
            return $userData;
        }
        
        return $valiny;
    }
    
        public function inscri($nom,$email,$mdp)
        {
            $photo='assets/img/men.jpg';
            $sql="insert into user values(null,'".$nom."','".$mdp."','".$email."')";
            $query=$this->db->query($sql);
        }
}