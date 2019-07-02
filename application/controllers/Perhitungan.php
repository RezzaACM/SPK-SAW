<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kriteria');
		$this->load->model('Model_guru');
		$this->load->model('M_perhitungan');

	}

	public function hasil()
	{
		// $data['dataJoin'] = $this->M_perhitungan->getTripleData()->result_array();
		$data['dataGuru'] = $this->Model_guru->ambilDataGuru()->result_array();
		$data['kriteria'] = $this->M_kriteria->getKriteria()->result_array();
		$data['judul'] = "Perhitungan";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/v_perhitungan',$data);
		$this->load->view('template/footer');
	}
	public function nilai_guru(){
		$id_guru = $this->input->post('id_guru',true);
		var_dump($id_guru);
		$dataKriteria = $this->M_kriteria->getKriteria()->result_array();
		foreach ($dataKriteria as $key ){
			$getIdKrit = $key['id_kriteria'];
			var_dump($getIdKrit);
			$nilai = $this->input->post('penilaian');
			var_dump($nilai);
			$idKrit = $this->input->post($getIdKrit);
			var_dump($idKrit);
			$data = array (
				'id' => "",
				'id_guru' => $id_guru,
				'id_kriteria' => $getIdKrit,
				'penilaian' => $nilai
		);

			$this->db->insert('transaksi_nilai',$data);
			

		}	
		$this->session->set_flashdata('flash', 'berhasil menambahkan nilai pada guru');
		redirect('perhitungan/hasil');

		// $data = array(
		// 	'id_guru' => $id_guru,
		// 	'id_kriteria' => $idKrit
		// );

		// $this->db->insert('transaksi_nilai', $data);
		// redirect('penilaian/nilai');

		
	}

}

/* End of file Perhitungan.php */
/* Location: ./application/controllers/Perhitungan.php */