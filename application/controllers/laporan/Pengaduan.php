<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Laporan');
    }

    public function index()
    {
        $data['title'] = 'Laporan Pengaduan';
        $data['subtitle'] = 'Data laporan pengaduan sesuai periode';

        $data['status'] = "";
        $data['dari'] = "";
        $data['sampai'] = "";
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('laporan/pengaduan/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }


    public function result()
    {
        $status = $this->input->post('status');
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        if ($status == '*') {
            echo "";
        } else if($status == null){
            redirect('laporan/pengaduan');
        } else if($dari == null && $sampai == null) {
            redirect('laporan/pengaduan');
        }

        $data['title'] = 'Laporan Pengaduan';
        $data['subtitle'] = 'Data laporan pengaduan sesuai periode';
        
        $data['status'] = $status;
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;

        $data['laporan'] = $this->M_Laporan->queryLaporan($status, $dari, $sampai);
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('laporan/pengaduan/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }

    public function cetak()
    {
        $status = $this->input->post('status');
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        if ($status == '*') {
            echo "";
        } else if($status == null){
            redirect('laporan/pengaduan');
        } else if($dari == null && $sampai == null) {
            redirect('laporan/pengaduan');
        }

        $data['status'] = $status;
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;

        $data['laporan'] = $this->M_Laporan->queryLaporan($status, $dari, $sampai);

        $this->load->view('__partials/_head');
        $this->load->view('laporan/pengaduan/cetak', $data);
        $this->load->view('__partials/_js');
    }
}