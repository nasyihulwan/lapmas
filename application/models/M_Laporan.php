<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Laporan extends CI_Model
{
    function queryLaporan($status = "", $dari = "", $sampai = "") {

        if ($status != '*') {
            $this->db->where('status', $status);
        }
        $this->db->where('tgl_pengaduan >=', $dari);
        $this->db->where('tgl_pengaduan <=', $sampai);
        $this->db->select('*');
        $this->db->from('pengaduan');

        return $this->db->get()->result();
    }
}