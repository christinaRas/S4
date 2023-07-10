<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Entre extends MY_Controller
{

    public function index()
    {
        $this->vue('entre');
    }
}