<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wallet extends MY_Controller
{

    public function index()
    {
        $id = $this->session->userdata('id_user');
        $this->load->model("WalletModel");
        $data = array();
       $data['result'] = $this->WalletModel->getWalletUser($id);
        $this->vue('Wallet',$data);
    }
    public function error()
    {
        $this->vue("error");
    }
    public function codeValid()
    {
        $id = $this->session->userdata('id_user');
        $this->load->model("WalletModel");
        $data = array();
        $data['result'] = $this->WalletModel->getcode();
        $this->vue("ListeCredit",$data);
    }
    public function insertCode()
    {
        $data = array(
            'id_paiement' => null,
            'id_user' => $this->session->userdata('id_user') ,
            'id_argent' => $this->input->post("code") ,
            'etat' => 1
        );
        if ($this->db->insert("paiement",$data))
        {
            $this->insertCode();
        }else {
            $this->error();
        }
    }
}