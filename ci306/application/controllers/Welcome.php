<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
    
    public function log()
	{
		$mail = $this->input->post("email");
		$pass = $this->input->post("password");
		
		$this->load->model('Model_login');
		if($this->Model_login->checkLogin($mail,$pass))
		{
			$this->session->set_userdata('email', $mail);
			$id = $this->session->userdata('id');
		$this->load->model('Model_login');
		$data['valiny'] = $this->Model_login->autre($id);
		$this->load->view('profil',$data);
		}else{
			$this->vue('login');
		}
	}
    public function inscri()
	{
		$email=$this->input->post("email");
		$mdp=$this->input->post("password");
		$nom=$this->input->post("nom");
		
			$this->load->model('Model_login');
			$this->Model_login->inscri($email,$mdp,$nom);
			$this->load->view('login');
	}
}