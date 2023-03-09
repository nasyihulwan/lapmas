<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Tanggapan extends CI_Model
{
    function getDate($id)
    {
        return $this->db->get_where('tanggapan', ['id_pengaduan' => $id])->row_array();
    }
}