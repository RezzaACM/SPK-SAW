<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model {

	function tambahKriteria(){

	$data = array (

		'nama_kriteria' => $this->input->post('nama_kriteria', true),
		'bobot' => $this->input->post('bobot', true),
		'attribute_kriteria' => $this->input->post('attribute_kriteria',true)
	);

	$this->db->insert('master_kriteria', $data);
	}

	function getKriteria()
	{
		$this->db->order_by('nama_kriteria','ASC');
		return $this->db->get('master_kriteria');
	}
	function hapus_kriteria($id){

		$this->db->where('id', $id);
		$this->db->delete('master_kriteria');
	}

}

/* End of file m_tambah_kriteria.php */
/* Location: ./application/models/m_tambah_kriteria.php */