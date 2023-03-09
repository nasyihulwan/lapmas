<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Landing extends CI_Model
{
    function queryTanggapanMasyarakat() 
    {
        $this->db->select('ulasan_masyarakat.*,masyarakat.nama as mn');
        $this->db->from('ulasan_masyarakat');
        $this->db->join('masyarakat', 'ulasan_masyarakat.nik = masyarakat.nik', 'LEFT');
        $this->db->order_by('tingkat_kepuasan', 'ASC');
        $this->db->limit(9);
        return $this->db->get()->result();
    }
}