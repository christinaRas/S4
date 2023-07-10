<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    public function checkLogin($mail,$pass)
        {
            $valiny = false;
            $sql = "select * from user where mail= '".$mail."' and mdp= '".$pass."' ";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row)
            {
                if($mail == $row['mail']  && $pass == $row['mdp'])
                {
                    
                    $valiny = true;
                    $this->load->library('session');
                    $this->session->set_userdata('id', $row['id_user']);
                    $this->session->set_userdata('nom', $row['nom_user']);
                }
            }
            return $valiny;
        }
        public function inscri($nom,$email,$mdp)
        {
            $photo='assets/img/men.jpg';
            $sql="insert into user values(null,'".$email."','".$mdp."','".$nom."')";
            $query=$this->db->query($sql);
        }
}