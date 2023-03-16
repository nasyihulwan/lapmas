<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vnv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengaduan');
    }

    public function index()
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryVerifikasiPengaduan();
        $data['title'] = 'Data Pengaduan - Verifikasi & Validasi (V&V)';
        $data['subtitle'] = 'Pastikan kebenaran laporan sebelum melakukan verifikasi & validasi';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');

    }

    public function detail($id_pengaduan) 
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryDetailPengaduan($id_pengaduan);
        $data['title'] = 'Data Pengaduan - Verifikasi & Validasi Detail';
        $data['subtitle'] = 'Pastikan kebenaran laporan sebelum melakukan verifikasi & validasi';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/vnv_detail', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js', $data);
        
    }

    public function update()
    {
        $id = $this->uri->segment(4);

        $this->db->set('status', 'proses');
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan');
        redirect('pengaduan/vnv');
    }

    public function tolak()
    {
        $this->M_Pengaduan->tolakPengaduan();
    }
}