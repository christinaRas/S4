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
		$userData = $this->Model_login->checkLogin($mail, $pass);
		if ($userData) {
			$this->session->set_userdata('mail', $mail);
			$this->session->set_userdata($userData);
			echo "ok";
		} else {
			echo "non";
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