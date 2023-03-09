<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengaduan');
        $this->load->model('M_Masyarakat');
        
        if ($this->session->userdata('nik') == null) {
            redirect('auth/login');
        } else if($this->session->userdata('id_petugas') != null) {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard - Masyarakat';

        $this->load->view('__partials/_head');
        $this->load->view('__partials/masyarakat_topbar');
        $this->load->view('masyarakat/dashboard', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }
    public function laporan()
    {
        $data['laporan'] = $this->M_Pengaduan->queryPengaduanCurrentSession();
        $data['title'] = 'Laporan Saya';

        $this->load->view('__partials/_head');
        $this->load->view('__partials/masyarakat_topbar');
        $this->load->view('masyarakat/laporan', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }
    public function ulasan()
    {
        if ($this->db->get_where('ulasan_masyarakat', ['nik' => $this->session->userdata('nik')])->num_rows() >= 1) {
            $data['ulasan'] = $this->M_Masyarakat->ulasan();
        }
        $data['countUlasan'] = $this->db->get_where('ulasan_masyarakat', ['nik' => $this->session->userdata('nik')])->num_rows();
        $data['title'] = 'Beri Ulasan';

        $this->form_validation->set_rules('ulasan', 'Ulasan', 'required');
        $this->form_validation->set_rules('tk', 'Tingkat Kepuasan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('__partials/_head');
            $this->load->view('__partials/masyarakat_topbar');
            $this->load->view('masyarakat/ulasan', $data);
            $this->load->view('__partials/_footer');
            $this->load->view('__partials/_js');
        } else {
            $this->M_Masyarakat->_sendUlasan();
        }
    }

    public function tanggapanBalik() {
        $this->M_Masyarakat->_sendTanggapanBalik();
        
    }
}