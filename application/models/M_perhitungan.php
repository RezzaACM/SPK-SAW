<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perhitungan extends CI_Model{

    function getTripleData(){
        $this->db->select('*');
        $this->db->from('transaksi_nilai');
        $this->db->join('master_guru', 'master_guru.id_guru = transaksi_nilai.id_guru');
        $this->db->join('master_kriteria', 'master_kriteria.id_kriteria = transaksi_nilai.id_kriteria');
        return $this->db->get();
    }

}



?>