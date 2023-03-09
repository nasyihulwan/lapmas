<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Tanggapan');
        $this->load->model('M_Pengaduan');
        
    }

    public function index()
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryValidasiPengaduan();
        $data['title'] = 'Data Pengaduan - Proses';
        $data['subtitle'] = 'Tindaklanjuti laporan sebelum menyelesaikan';
        
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }


    function detail($id_pengaduan) 
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryDetailPengaduan($id_pengaduan);
        $data['getDate'] = $this->M_Tanggapan->getDate($id_pengaduan);
        $data['title'] = 'Data Pengaduan - Verifikasi Detail';
        $data['subtitle'] = 'Pastikan kebenaran laporan sebelum melakukan verifikasi';
        
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/proses_detail', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }

    public function insertTanggapan()
    {
        $id_petugas = $this->input->post('id_petugas');
        $id_pengaduan = $this->uri->segment(4);
        $tanggapan = $this->input->post('tanggapan');

        $data = [
            'id_tanggapan' => rand(10000, 99999),
            'id_pengaduan' => $id_pengaduan,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $tanggapan,
            'id_petugas' => $id_petugas

        ];
        
        $this->db->insert('tanggapan', $data);
        redirect('pengaduan/proses');
    }
}