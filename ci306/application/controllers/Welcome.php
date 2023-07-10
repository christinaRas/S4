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
		if ($this->Model_login->checkLogin($mail, $pass)) {
			$this->session->userdata('id_user');
			$this->session->set_userdata('mail', $mail);
			$this->load->Controller('Landing');
		} else {
			echo "non";
		}
	}
	

    public function inscri()
	{		
		$nom=$this->input->post("nom");
		$email=$this->input->post("mail");
		$mdp=$this->input->post("mdp");
		
		$this->load->model('Model_login');
		$this->Model_login->inscri($nom,$email,$mdp);
		$this->vue('login');
	}
}