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

    public function hapus()
    {
        $id = $this->uri->segment(4);

        $this->db->where('id_pengaduan', $id);
        $this->db->delete('pengaduan_ditolak');
        $this->db->where('id_pengaduan', $id);
        $this->db->delete('pengaduan');

        $this->session->set_flashdata('deleteSuccess', 'Action Completed');
        redirect('pengaduan/ditolak');
    }
    public function pulihkan()
    {
        $id = $this->uri->segment(4);

        $this->db->where('id_pengaduan', $id);
        $this->db->delete('pengaduan_ditolak');

        $this->db->set('status', '0');
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan');
        
        $this->session->set_flashdata('pulihSuccess', 'Action Completed');
        redirect('pengaduan/ditolak');
    }

}