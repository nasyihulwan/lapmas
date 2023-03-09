<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Lapor extends CI_Model
{
    function _sendLapor() {
         // Check image yang akan di upload
         $upload_image = $_FILES['foto_laporan']['name'];

         if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|webp';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/images/laporan/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_laporan')) {
                $foto_laporan = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('lapor');
            }
        }

        $data = [
            'id_pengaduan' => rand(0, 99999),
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => $this->session->userdata('nik'),
            'judul_laporan' => $this->input->post('judul_laporan'),
            'isi_laporan' => $this->input->post('isi_laporan'),
            'foto' => $foto_laporan,
            'status' => '0'
        ];

        $this->db->insert('pengaduan', $data);
        redirect('lapor');
    }
    
}