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
         $upload_image = $_FILES['foto_bukti']['name'];

         if ($upload_image) {
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '10240';
            $config['upload_path'] = './assets/images/laporan/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_bukti')) {
                $foto_bukti = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('lapor');
            }
        }

        $data = [
            'id_selesai' => rand(10000, 99999),
            'id_pengaduan' => $id_pengaduan,
            'tgl_selesai' => date('Y-m-d'),
            'foto' => $foto_bukti
        ];

        $this->db->insert('pengaduan_selesai', $data);
        $this->session->set_flashdata('updateSelesai', 'Action Completed');
        redirect('pengaduan/proses');
    }
}