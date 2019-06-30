<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != 'login' ) {
			redirect('login_auth/login');
		}
	}
	public function index()
	{
		$data['judul'] = "Dashboard";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/index');
		$this->load->view('template/footer');
		
	}
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */