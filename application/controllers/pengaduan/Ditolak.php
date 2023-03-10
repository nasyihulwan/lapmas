<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ditolak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengaduan');
    }

    public function index()
    {
        $data['queryAduan'] = $this->M_Pengaduan->queryTolakPengaduan();
        $data['title'] = 'Data Pengaduan - Ditolak';
        $data['subtitle'] = 'List data laporan yang ditolak';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/pengaduan/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');

    }

}