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
	function hapus_data_guru($id){

		$this->db->where('id', $id);
		$this->db->delete('master_guru');
	}
	function getMahasiswaById($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		$res2 = $this->db->get('master_guru');
		return $res2->result_array() ;

		// return $this->db->get_where('master_guru', ['id => $id'])->result_array();
	}
	function  update_data_guru(){
		$id = $this->input->post('id',true);
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

		$this->db->where('id', $id);
		$this->db->update('master_guru',$data);
	}

}

/* End of file m_tambah_data_guru.php */
/* Location: ./application/models/m_tambah_data_guru.php */