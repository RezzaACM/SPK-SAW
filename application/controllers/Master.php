<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_guru');
		$this->load->library('form_validation');
	}
	public function guru()
	{
		// $data['getGuru'] = $this->Model_guru->get_mahasiswa_by_id();
		$data['jabatan'] = ['Guru','Kepala Sekolah', 'Wakil Bidang Kesiswaan', 'Wakil Bidang Kurikulum'];
		$data['guru'] = $this->Model_guru->ambilDataGuru()->result();
		$data['judul'] = "Master Guru";
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/master_guru',$data);
		$this->load->view('template/footer');
	}
	public function tambahDataGuru()
	{
		
		$this->Model_guru->tambah_data_guru();
		$this->session->set_flashdata('flash','Ditambahkan');
		redirect('master/guru');
	}
	public function hapusDataGuru($id_guru)
	{
		$this->Model_guru->hapus_data_guru($id_guru);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('master/guru');
	}
	public function suntingGuru($id_guru)
	{
		$data['jabatan'] = ['Guru','Kepala Sekolah', 'Wakil Bidang Kesiswaan', 'Wakil Bidang Kurikulum'];
		$data['jenis_klmn'] = ['Laki-laki', 'Perempuan'];
		$data['judul'] = "Sunting Guru";
		$data['guru'] = $this->Model_guru->getMahasiswaById($id_guru);
		$this->load->view('template/head',$data);
		$this->load->view('template/header');
		$this->load->view('home/sunting_guru',$data);
		$this->load->view('template/footer');
	}
	public function updateDataGuru()
	{
		$this->Model_guru->update_data_guru();
		$this->session->set_flashdata('flash','Diupdate!');
		redirect('master/guru');
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */