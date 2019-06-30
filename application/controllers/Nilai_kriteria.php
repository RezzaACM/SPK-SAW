<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_subkriteria');
	}

	public function nilai()
	{
		$this->load->model('M_kriteria');
		$data['kriteria'] = $this->M_kriteria->getKriteria()->result_array();
		$data['joinTable'] = $this->M_subkriteria->getDataSub()->result_array();
		$data['judul'] = "Master Kriteria";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/v_nilai_kriteria');
		$this->load->view('template/footer');
	}
	public function tambahSub(){
		$this->M_subkriteria->tambahDataSub();
		$this->session->set_flashdata('flash', 'ditambahkan!');
		redirect('Nilai_kriteria/nilai');
	}
	// public function hapus_data_sub($id){
	// 	$this->M_subkriteria->hapusDataSub($id);
	// 	$this->session->set_flashdata('flash', 'dihapus!');
	// 	redirect('Nilai_kriteria/nilai');
	// }
	public function hapus_data_sub($id_sub){
		$this->M_subkriteria->hapusDataSub($id_sub);
				$this->session->set_flashdata('flash', 'dihapus!');
		redirect('Nilai_kriteria/nilai');
	}

}

/* End of file Nilai_kriteria.php */
/* Location: ./application/controllers/Nilai_kriteria.php */