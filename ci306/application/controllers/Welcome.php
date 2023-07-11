<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function index()
	{
		$this->vue('login');
	}
    public function error()
    {
        $this->vue("error");
    }

	public function log()
	{
		$mail = $this->input->post("mail");
		$pass = $this->input->post("mdp");

		$this->load->model('Model_login');
		if ($this->Model_login->checkLogin($mail, $pass)) {
			$id = $this->session->userdata('id_user');
			$this->session->set_userdata('mail', $mail);

			$this->load->model('Model_login');
			$retour = $this->Model_login->checkretour($id);

			if (empty($retour))
			{
				$this->load->model('Model_diet');
				$data = array();
				$data['genres'] = $this->Model_diet->getGenre();
				$data['choix'] = $this->Model_diet->getChoixdiet();

				$this->vue('diet', $data);

			} else {
				$this->load->model('Model_evolution');
				$choix = $this->Model_evolution->returne($id);
				if ($choix == 1) {
					header("Location: " . $base_url . '../Augmentation/plat');
					exit();
				} elseif ($choix == 2) {
					header("Location: " . $base_url . '../Diminution/plat');
				}
			}
		}else {
			$this->error();
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