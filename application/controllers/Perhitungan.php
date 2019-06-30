<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kriteria');
	}

	public function hasil()
	{
		$data['kriteria'] = $this->M_kriteria->getKriteria()->result_array();
		$data['judul'] = "Perhitungan";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/v_perhitungan',$data);
		$this->load->view('template/footer');
	}

}

/* End of file Perhitungan.php */
/* Location: ./application/controllers/Perhitungan.php */