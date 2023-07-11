<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_diet extends CI_Model {

    public function getGenre()
    {
        $sql="SELECT * from genre";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getChoixdiet()
    {
        $sql="SELECT * from choixRegime";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function save($id_user,$id_genre,$taille,$poids,$id_choix)
    {
        $sql="Insert into description values(null,".$id_user.",".$id_genre.",".$taille.",".$poids.",".$id_choix.")";
        $query=$this->db->query($sql);
    }
    public function getImcDepart($poids,$taille)
    {
        $taille = $taille/10;//conversion de taille en m
        $imc = $poids/ ($taille * $taille);
        return $imc;
    }
    public function getImcEvolution($poids,$taille)
    {
        $taille = $taille/10;//conversion de taille en m
        $imc = $poids/$taille * $taille;
        return $imc;
    }
}