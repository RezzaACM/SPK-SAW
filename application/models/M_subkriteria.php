<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subkriteria extends CI_Model {

	function getDataSub(){
		$this->db->select('*');
		$this->db->from('master_subkriteria');
		$this->db->join('master_kriteria', 'master_kriteria.id_kriteria= master_subkriteria.id_kriteria');
		$this->db->order_by('nama_kriteria','ASC');
		return $this->db->get();

	}
	function tambahDataSub(){
		$id_kriteria = $this->input->post('id_kriteria');
		$subkriteria = $this->input->post('subkriteria');

		$data = array(

			'id_kriteria' =>$id_kriteria,
			'subkriteria' => $subkriteria

		);

		$this->db->insert('master_subkriteria',$data);
	}
	function hapusDataSub($id_sub){
		$this->db->query("DELETE FROM `master_subkriteria` WHERE `master_subkriteria`.`id_sub` = $id_sub");
	}

}

/* End of file M_subkriteria.php */
/* Location: ./application/models/M_subkriteria.php */