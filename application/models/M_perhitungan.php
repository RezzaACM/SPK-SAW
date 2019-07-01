<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perhitungan extends CI_Model{

    function getTripleData($idGuru, $idKrit){
        $this->db->select('*');
        $this->db->from('master_guru');
        $this->db->join('transaksi_nilai', 'master_guru.id_guru = transaksi_nilai.id_guru');
        // $this->db->join('master_kriteria', 'master_kriteria.id_kriteria = transaksi_nilai.id_kriteria');
        $this->db->where('nama',$idGuru);
        $this->db->where('id_kriteria',$idKrit);
        return $this->db->get();
    }

}



?>