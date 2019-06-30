<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function login()
	{
		// $data['judul'] = "Login Page";
		// $this->load->view('template/head',$data);
		// $this->load->view('template/header');
		$this->load->view('home/v_login');
		// $this->load->view('template/footer');
	}
	public function loginAct(){
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$checking = $this->m_login->auth_admin('admin', array('email' => $email), array('password' => $pass));


		if ($checking != FALSE) {
			foreach ($checking as $row) {
					$session_data = array (

						'nama' => $row->nama,
						'email' => $row->email,
						'password'=> $row->password,
						'status'=> "login"

					);
					$this->session->set_userdata( $session_data );
					// $this->session->set_flashdata('flash');
					redirect( base_url(''));
				}	
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Login_auth/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */