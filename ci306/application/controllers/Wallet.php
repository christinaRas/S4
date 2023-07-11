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
}