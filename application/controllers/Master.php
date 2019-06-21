<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_guru');
	}
	public function guru()
	{
		// $judul['dashboard'] = "Data Guru";
		$data['guru'] = $this->Model_guru->ambilDataGuru()->result();
		
		$this->load->view('template/header');
		$this->load->view('home/master_guru',$data);
		$this->load->view('template/footer');
	}
	public function tambahDataGuru()
	{
		
		$this->Model_guru->tambah_data_guru();
		redirect('master/guru');
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */