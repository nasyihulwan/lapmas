<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Tambah User Baru';
        $data['subtitle'] = '';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('pengaturan/user_add', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }

    public function petugas()
    {
        $data['title'] = 'Tambah User Baru - Petugas';
        $data['subtitle'] = 'Menambahkan petugas baru';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('pengaturan/user_add', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }

    public function masyarakat()
    {
        $data['title'] = 'Tambah User Baru - Masyarakat';
        $data['subtitle'] = 'Menambahkan masyarakat baru';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('pengaturan/user_add', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }
}