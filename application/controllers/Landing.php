<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Landing');

        if ($this->session->userdata('id_petugas') != null) {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $data['ulasan'] = $this->M_Landing->queryTanggapanMasyarakat();

        $this->load->view('landing/_partials/1_head');
        $this->load->view('landing/_partials/2_preloader');
        $this->load->view('landing/_partials/_headers/landing_header');
        $this->load->view('landing/_partials/_welcomes/landing_welcome');
        $this->load->view('landing/_partials/6_big_features');
        $this->load->view('landing/_partials/8_testimonials', $data);
        $this->load->view('landing/_partials/10_counter_parallax');
        $this->load->view('landing/_partials/12_contact_us');
        $this->load->view('landing/_partials/footer');
        $this->load->view('landing/_partials/js');
    }
}