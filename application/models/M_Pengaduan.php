<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengaduan extends CI_Model
{
    function queryVerifikasiPengaduan()
    {
        return $this->db->get_where('pengaduan', ['status' => '0'] )->result();
    }

    function queryValidasiPengaduan()
    {
        return $this->db->get_where('pengaduan', ['status' => 'proses'] )->result();
    }

    function queryPengaduanSelesai()
    {
        return $this->db->get_where('pengaduan', ['status' => 'selesai'] )->result();
    }

    function queryDetailPengaduan($id_pengaduan)
    {
        return $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array();
    }

    function updateSelesai() {
        $id = $this->uri->segment(4);
        
        $this->db->set('status', 'selesai');
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan');
    }
    function queryPengaduanCurrentSession()
    {
        // return $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->result();
        $this->db->select('pengaduan.*, pengaduan.id_pengaduan as p_id, tanggapan.*, tanggapan.id_pengaduan as t_id');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan', 'LEFT');
        $this->db->where('nik', $this->session->userdata('nik'));
        return $this->db->get()->result();
    }
}