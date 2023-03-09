<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Masyarakat extends CI_Model
{
    function queryAllMasyarakat()
    {
        return $this->db->query('SELECT * FROM masyarakat WHERE nik NOT LIKE "ANONYMOUS%"');
    }

    // function _sendUlasan()
    // {
    //     $getLastId = $this->db->query("SELECT id_ulasan FROM ulasan_masyarakat ORDER BY id_ulasan DESC LIMIT 1")->row_array();
    //     $nomorTerakhir = $getLastId['id_ulasan'];
    // }

    function _sendUlasan()
    {
        $getLastId = $this->db->query("SELECT id_ulasan FROM ulasan_masyarakat ORDER BY id_ulasan DESC LIMIT 1")->row_array();
        $nomorTerakhir = $getLastId['id_ulasan'];

        $check_ulasan = $this->db->get_where('ulasan_masyarakat', ['nik' => $this->session->userdata('nik')])->num_rows();
        $is_censored = '';

        if($this->input->post('sensor') != null){ 
            $is_censored = $this->input->post('sensor');
        } else { 
            $is_censored = '0';
        }

        if ($check_ulasan <= 0) {
            $data = [
                'id_ulasan' => buatKode($nomorTerakhir, 1, 4),
                'nik' => $this->session->userdata('nik'),
                'tgl_tanggapan' => date('Y-m-d'),
                'ulasan' => $this->input->post('ulasan'),
                'tingkat_kepuasan' => $this->input->post('tk'),
                'is_censored' => $is_censored
            ];

            $this->db->insert('ulasan_masyarakat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Ulasan Anda berhasil di kirim!</div>');
            redirect('masyarakat/ulasan');
        } else if($check_ulasan >= 1) {
            $data = [
                'nik' => $this->session->userdata('nik'),
                'tgl_tanggapan' => date('Y-m-d'),
                'ulasan' => $this->input->post('ulasan'),
                'tingkat_kepuasan' => $this->input->post('tk'),
                'is_censored' => $is_censored
            ];

            $this->db->where('nik', $this->session->userdata('nik'));
            $this->db->update('ulasan_masyarakat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Ulasan Anda berhasil di update!</div>');
            redirect('masyarakat/ulasan');
        }

        // if ($check_ulasan) {
            
        // } else {
            
        // }
        
        // if ($check_ulasan) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-success">Ulasan Anda berhasil di update!</div>');
        // } else {
        //     $this->session->set_flashdata('message', '<div class="alert alert-success">Ulasan Anda berhasil di kirim!</div>');
        // }
        // redirect('masyarakat/ulasan');
    }
    
    function ulasan()
    {
        return $this->db->get_where('ulasan_masyarakat', ['nik' => $this->session->userdata('nik')])->row_array();
    }
}