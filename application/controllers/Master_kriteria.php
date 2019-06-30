<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_kriteria extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_kriteria');
		}

	public function kriteria()
	{
		$data['attribute'] = ['Benefit', 'Cost'];
		$data['kriteria'] = $this->M_kriteria->getKriteria()->result_array();
		$data['judul'] = "Master Kriteria";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/v_kriteria',$data);
		$this->load->view('template/footer');
	}
	public function tambah_kriteria(){
		$this->M_kriteria->tambahKriteria();
		$this->session->set_flashdata('flash', 'ditambahkan!');
		redirect('Master_kriteria/kriteria');
	}
	public function editKriteria()
	{
		$data['judul'] = "Sunting Kriteria";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/v_edit_kriteria');
		$this->load->view('template/footer');
	}
	public function hapusKriteria($id){
		$this->M_kriteria->hapus_kriteria($id);
		$this->session->set_flashdata('flash', 'dihapus!');
		redirect('Master_kriteria/kriteria','refresh');
	}

}

/* End of file Master_kriteria.php */
/* Location: ./application/controllers/Master_kriteria.php */