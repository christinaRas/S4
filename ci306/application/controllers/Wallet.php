<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wallet extends MY_Controller
{

    public function index()
    {
        
        $this->vue('Wallet');
    }
}