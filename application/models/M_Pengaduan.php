<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengaduan extends CI_Model
{
    function queryTolakPengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        $this->db->where('status', 'tolak');
        return $this->db->get()->result();
    }
    function queryVerifikasiPengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        $this->db->where('status', '0');
        return $this->db->get()->result();
    }

    function queryValidasiPengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        $this->db->where('status', 'proses');
        return $this->db->get()->result();
    }

    function queryPengaduanSelesai()
    {
        $this->db->select('pengaduan.id_pengaduan as p_id,pengaduan_selesai.id_pengaduan as ps_id,pengaduan.*,pengaduan_kategori.*,pengaduan_selesai.*');
        $this->db->from('pengaduan');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        $this->db->join('pengaduan_selesai', 'pengaduan.id_pengaduan = pengaduan_selesai.id_pengaduan');
        $this->db->where('status', 'selesai');
        return $this->db->get()->result();

    }

    function queryDetailPengaduan($id_pengaduan)
    {
        $this->db->where('pengaduan.id_pengaduan', $id_pengaduan);
        $this->db->select('pengaduan.*, pengaduan.id_pengaduan as p_id, tanggapan.*, tanggapan.id_pengaduan as t_id,pengaduan_kategori.*');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan', 'LEFT');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        return $this->db->get()->row_array();
    }

    function queryDetailPengaduanSelesai($id_pengaduan)
    {
        $this->db->where('pengaduan.id_pengaduan', $id_pengaduan);
        $this->db->select('
            pengaduan.*, pengaduan.id_pengaduan as p_id, tanggapan.*, tanggapan.id_pengaduan as t_id,pengaduan_kategori.*,tgl_selesai,petugas.*,pengaduan_selesai.lampiran_1 as ls_1,pengaduan_selesai.lampiran_2 as ls_2,pengaduan_selesai.lampiran_3 as ls_3
        ');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan', 'LEFT');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        $this->db->join('pengaduan_selesai', 'pengaduan.id_pengaduan = pengaduan_selesai.id_pengaduan');
        $this->db->join('petugas', 'pengaduan_selesai.id_petugas = petugas.id_petugas');
        return $this->db->get()->row_array();
    }

    function updateSelesai() {
        $id = $this->uri->segment(4);
        
        $this->db->set('status', 'selesai');
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan');
    }
    function queryPengaduanCurrentSession()
    {
        // return $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->result();
        $this->db->select('pengaduan.*, pengaduan.id_pengaduan as p_id, tanggapan.*, tanggapan.id_pengaduan as t_id,pengaduan_kategori.*');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan', 'LEFT');
        $this->db->join('pengaduan_kategori', 'pengaduan.kategori = pengaduan_kategori.id');
        $this->db->where('nik', $this->session->userdata('nik'));
        return $this->db->get()->result();
    }

    function _selesai()
    {
        $id_pengaduan = $this->input->post('id_pengaduan');

         // Check image yang akan di upload
         $lampiran_1 = $_FILES['lampiran_1']['name'];
         $lampiran_2 = $_FILES['lampiran_2']['name'];
         $lampiran_3 = $_FILES['lampiran_3']['name'];

         if ($lampiran_1) {
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|mp4';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/images/laporan/selesai/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('lampiran_1')) {
                $lampiran_1 = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('lapor');
            }
        }

        if ($lampiran_2) {
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|mp4';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/images/laporan/selesai/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('lampiran_2')) {
                $lampiran_2 = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('lapor');
            }
        }

        if ($lampiran_3) {
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|mp4';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/images/laporan/selesai/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('lampiran_3')) {
                $lampiran_3 = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('lapor');
            }
        }

        $data = [
            'id_selesai' => rand(10000, 99999),
            'id_pengaduan' => $id_pengaduan,
            'tgl_selesai' => date('Y-m-d'),
            'lampiran_1' => $lampiran_1,
            'lampiran_2' => $lampiran_2,
            'lampiran_3' => $lampiran_3,
            'id_petugas' => $this->session->userdata('id_petugas')
        ];

        $this->db->insert('pengaduan_selesai', $data);

        $this->db->set('status', 'selesai');
        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->update('pengaduan');

        $this->session->set_flashdata('updateSelesai', 'Action Completed');
        redirect('pengaduan/proses');
    }

    public function tolakPengaduan()
    {
        $id = $this->uri->segment(4);

        $this->db->set('status', 'tolak');
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan');

        $data = [
            'id_tolak' => rand(10000, 99999),
            'id_pengaduan' => $id,
            'alasan' => $this->input->post('alasan_tolak'),
            'id_petugas' => $this->session->userdata('id_petugas')
        ];

        $this->db->insert('pengaduan_ditolak', $data);

        $this->session->set_flashdata('tolakSuccess', 'Action Completed');
        redirect('pengaduan/vnv');
    }

    function getPengaduanKategori()
    {
        $this->db->query('SELECT * FROM pengaduan_kategori ORDER BY nama_kategori ASC');
        return $this->db->get('pengaduan_kategori')->result();
    }
}