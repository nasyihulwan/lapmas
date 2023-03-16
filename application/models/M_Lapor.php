<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Lapor extends CI_Model
{
    function _sendLapor() {
        $nik = $this->session->userdata('nik');
         // Check image yang akan di upload
         $lampiran_1 = $_FILES['lampiran_1']['name'];
         $lampiran_2 = $_FILES['lampiran_2']['name'];
         $lampiran_3 = $_FILES['lampiran_3']['name'];

         if ($lampiran_1) {
            $config['allowed_types'] = 'jpg|jpeg|png|pdf|mp4';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/images/laporan/pengaduan/'.$nik;

            $this->load->library('upload', $config);

            if (!is_dir('./assets/images/laporan/pengaduan/'.$nik)) {
                mkdir('./assets/images/laporan/pengaduan/' . $nik, 0777, TRUE);
            }

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
            $config['upload_path'] = './assets/images/laporan/pengaduan/'.$nik;

            $this->load->library('upload', $config);

            if (!is_dir('./assets/images/laporan/pengaduan/'.$nik)) {
                mkdir('./assets/images/laporan/pengaduan/' . $nik, 0777, TRUE);
            }

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
            $config['upload_path'] = './assets/images/laporan/pengaduan/'.$nik;

            $this->load->library('upload', $config);

            if (!is_dir('./assets/images/laporan/pengaduan/'.$nik)) {
                mkdir('./assets/images/laporan/pengaduan/' . $nik, 0777, TRUE);
            }

            if ($this->upload->do_upload('lampiran_3')) {
                $lampiran_3 = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('lapor');
            }
        }

        $data = [
            'id_pengaduan' => rand(0, 99999),
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => $nik,
            'judul_laporan' => $this->input->post('judul_laporan'),
            'isi_laporan' => $this->input->post('isi_laporan'),
            'lampiran_1' => $lampiran_1,
            'lampiran_2' => $lampiran_2,
            'lampiran_3' => $lampiran_3,
            'status' => '0'
        ];

        $this->db->insert('pengaduan', $data);
        $this->session->set_flashdata('success', 'Action Completed');
        redirect('lapor');
    }

    
    
}