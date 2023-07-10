<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function index()
	{
		$this->vue('login');
	}

    public function log()
	{
		$mail = $this->input->post("mail");
		$pass = $this->input->post("mdp");
		
		$this->load->model('Model_login');
		if($this->Model_login->checkLogin($mail,$pass))
		{
			$this->session->set_userdata('email', $mail);
			$id = $this->session->userdata('id');
		$this->load->model('Model_login');
		$data['valiny'] = $this->Model_login->autre($id);
		$this->vue('profil',$data);
		}else{
			$this->vue('login');
		}
	}
    public function inscri()
	{		
		$nom=$this->input->post("nom");
		$email=$this->input->post("email");
		$mdp=$this->input->post("password");
		
			$this->load->model('Model_login');
			$this->Model_login->inscri($email,$mdp,$nom);
			$this->vue('login');
	}
}