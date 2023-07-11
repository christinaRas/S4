<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wallet extends MY_Controller
{

    public function index()
    {
        $this->load->model("WalletModel");
        $this->WalletModel->getEa
        $this->vue('Wallet');
    }
}