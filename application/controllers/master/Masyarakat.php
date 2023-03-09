<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Masyarakat');
        
        if ($this->session->userdata('level') != 'admin') {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $data['masyarakat'] = $this->M_Masyarakat->queryAllMasyarakat()->result();
        $data['title'] = 'Data Masyrakat';
        $data['subtitle'] = 'List data masyarakat yang terdaftar';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('master/masyarakat/index', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }
}