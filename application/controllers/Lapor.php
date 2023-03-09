<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Lapor');
        
        if ($this->session->userdata('nik') == null) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('judul_laporan', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('landing/_partials/1_head');
            $this->load->view('landing/_partials/2_preloader');
            $this->load->view('landing/_partials/_headers/lapor_header');
            $this->load->view('landing/_partials/_welcomes/lapor_welcome');
            $this->load->view('landing/_partials/_input');
            $this->load->view('landing/_partials/7_home_parallax');
            $this->load->view('landing/_partials/12_contact_us');
            $this->load->view('landing/_partials/footer');
            $this->load->view('landing/_partials/js');
        } else {
            $this->M_Lapor->_sendLapor();
        }
    }
}