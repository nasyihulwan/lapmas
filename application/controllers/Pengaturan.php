<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pengaduan');
    }

    public function kategori()
    {
        $data['kategoriPengaduan'] = $this->M_Pengaduan->getPengaduanKategori();
        $data['title'] = 'Data Kategori Pengaduan';
        $data['subtitle'] = 'Untuk mengelola Data Kategori';
        
        $this->load->view('__partials/_head');
        $this->load->view('__partials/_sidebar');
        $this->load->view('pengaturan/kategori_pengaduan', $data);
        $this->load->view('__partials/_footer');
        $this->load->view('__partials/_js');
    }

    public function tambahKategori()
    {
        $data['kategoriPengaduan'] = $this->M_Pengaduan->getPengaduanKategori();
        $data['title'] = 'Tambah Data Kategori Pengaduan';
        $data['subtitle'] = 'Untuk menambah data kategori';

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

        $is_checked = '0';
        if ($this->input->post('is_checked') != null) {
            $is_checked = '1';
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('__partials/_head');
            $this->load->view('__partials/_sidebar');
            $this->load->view('pengaturan/kategori_tambah', $data);
            $this->load->view('__partials/_footer');
            $this->load->view('__partials/_js');
        } else {
            $data = [
                'id' => 'KAT' . rand(10000, 99999),
                'nama_kategori' => $this->input->post('nama_kategori'),
                'is_checked' => $is_checked,
            ];

            $this->db->insert('pengaduan_kategori', $data);
            $this->session->set_userdata('insertKategori', 'Action Success');
            redirect('pengaturan/kategori');
        }
        
    }

    public function updateKategori()
    {
        $id = $this->uri->segment(3);

        if ($this->input->post('is_checked') == null) {
            $this->db->set('is_checked', '0');
        } else {
            $this->db->set('is_checked', $this->input->post('is_checked'));
        }
        $this->db->where('id', $id);
        $this->db->update('pengaduan_kategori');

        redirect('pengaturan/kategori');

    }
}