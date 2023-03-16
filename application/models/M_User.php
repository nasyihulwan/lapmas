<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    function _addMasyarakat()
    {
        $data = [
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'nama' => htmlspecialchars($this->input->post('nama_masyarakat', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'status' => 'active',
            'telp' => $this->input->post('telp')
        ];
        $this->db->insert('masyarakat', $data);
        $this->session->set_flashdata('addMasyarakatSuccess', 'Action Completed');
        redirect('master/masyarakat');
    }

    function _addPetugas()
    {
        $data = [
            'id_petugas' => rand(10000, 99999),
            'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'telp' => $this->input->post('telp'),
            'level' => $this->input->post('level'),
            'status' => 'active',
        ];
        $this->db->insert('petugas', $data);
        $this->session->set_flashdata('addPetugasSuccess', 'Action Completed');
        redirect('master/petugas');
    }

}