<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Masyarakat');

        if ($this->session->userdata('nik') != null) {
            redirect('lapor');
        } else if($this->session->userdata('id_petugas') == null) {
            redirect('/');
        }
    }

    public function index()
    {
        $data['masyarakatCount'] = $this->M_Masyarakat->queryAllMasyarakat()->num_rows();
        $data['title'] = 'Dashboard';
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }
}