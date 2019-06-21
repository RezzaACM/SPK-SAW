<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Guru extends CI_Model {

	
	function  tambah_data_guru(){
		$nuptk = $this->input->post('nuptk',true);
		$nama = $this->input->post('nama',true);
		$tempat = $this->input->post('tempat',true);
		$tanggal = $this->input->post('tanggal_lahir',true);
		$jk = $this->input->post('jenis_kelamin',true);
		$jabatan = $this->input->post('tugas_jabatan',true);

		$data = array (
			'nuptk' => $nuptk,
			'nama' => $nama,
			'tempat' => $tempat,
			'tanggal_lahir' => $tanggal,
			'jenis_kelamin' => $jk,
			'tugas_jabatan' => $jabatan

		);

		$this->db->insert('master_guru',$data);
	}

	function ambilDataGuru(){
		return $this->db->get('master_guru');
	}

}

/* End of file m_tambah_data_guru.php */
/* Location: ./application/models/m_tambah_data_guru.php */