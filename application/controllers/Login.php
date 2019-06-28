<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login_page()
	{
		// $data['judul'] = "Login Page";
		// $this->load->view('template/head',$data);
		// $this->load->view('template/header');
		$this->load->view('home/v_login');
		// $this->load->view('template/footer');	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */