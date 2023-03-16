<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selesai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengaduan');
        $this->load->model('M_Tanggapan');
        
    }

    public function index()
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryPengaduanSelesai();
        $data['title'] = 'Data Pengaduan - Selesai';
        $data['subtitle'] = 'Laporan Pengaduan yang telah selesai';
        
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }

    function detail($id_pengaduan) 
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryDetailPengaduanSelesai($id_pengaduan);
        $data['getDate'] = $this->M_Tanggapan->getDate($id_pengaduan);
        $data['title'] = 'Data Pengaduan - Selesai Detail';
        $data['subtitle'] = 'Detail data pengaduan dengan status selesai';
        
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/selesai_detail', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }
}