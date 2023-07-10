<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
    
    public function checkLogin($mail,$pass)
        {
            $valiny = false;
            $sql = "select * from User where email= '".$mail."' and mdp= '".$pass."' ";
            $query = $this->db->query($sql);
            foreach($query->result_array() as $row)
            {
                if($mail == $row['email']  && $pass == $row['mdp'])
                {
                    
                    $valiny = true;
                    $this->load->library('session');
                    $this->session->set_userdata('id', $row['idUser']);
                    $this->session->set_userdata('admin', $row['identification']);
                    $this->session->set_userdata('nom', $row['nom']);
                    $this->session->set_userdata('pdp', $row['photo']);
                    $this->session->set_userdata('admin', $row['identification']);


                }
            }
            return $valiny;
        }
        public function inscri($email,$mdp,$nom)
        {
            $photo='assets/img/men.jpg';
            $sql="insert into User values(null,'".$email."','".$mdp."','".$nom."',0,'".$photo."')";
            $query=$this->db->query($sql);
        }

}