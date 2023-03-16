<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengaduan extends CI_Model
{
    function queryTolakPengaduan()
    {
        return $this->db->get_where('pengaduan', ['status' => 'tolak'] )->result();
    }
    function queryVerifikasiPengaduan()
    {
        return $this->db->get_where('pengaduan', ['status' => '0'] )->result();
    }

    function queryValidasiPengaduan()
    {
        return $this->db->get_where('pengaduan', ['status' => 'proses'] )->result();
    }

    function queryPengaduanSelesai()
    {
        return $this->db->get_where('pengaduan', ['status' => 'selesai'] )->result();
    }

    function queryDetailPengaduan($id_pengaduan)
    {
        // return $this->db->get_where('pengaduan', ['id_pengaduan' => $id_pengaduan])->row_array();

        $this->db->where('pengaduan.id_pengaduan', $id_pengaduan);
        $this->db->select('pengaduan.*, pengaduan.id_pengaduan as p_id, tanggapan.*, tanggapan.id_pengaduan as t_id');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan', 'LEFT');
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
        $this->db->select('pengaduan.*, pengaduan.id_pengaduan as p_id, tanggapan.*, tanggapan.id_pengaduan as t_id');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'pengaduan.id_pengaduan = tanggapan.id_pengaduan', 'LEFT');
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
            $config['upload_path'] = './assets/images/laporan/pengaduan/pengaduan_selesai/';

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
            $config['upload_path'] = './assets/images/laporan/pengaduan/pengaduan_selesai/';

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
            $config['upload_path'] = './assets/images/laporan/pengaduan/pengaduan_selesai/';

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
            'lampiran_3' => $lampiran_3
        ];

        $this->db->insert('pengaduan_selesai', $data);

        $this->db->set('status', 'selesai');
        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->update('pengaduan');

        $this->session->set_flashdata('updateSelesai', 'Action Completed');
        redirect('pengaduan/proses');
    }
}