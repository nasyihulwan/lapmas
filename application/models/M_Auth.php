<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{
    function _register()
    {
        $data = [
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'telp' => $this->input->post('telp')
        ];
        $this->db->insert('masyarakat', $data);
        $this->session->set_flashdata('message', '<div class="card-header"><h4 class="card-title">Akun berhasil dibuat! Silahkan Login.</h4></div>');
        redirect('auth/login');
    }

    function _login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $username])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $username])->row_array();

        if ($masyarakat) {
            if (password_verify($password, $masyarakat['password'])) {
                $data = [
                    'nama' => $masyarakat['nama'],
                    'nik' => $masyarakat['nik']
                ];
                $this->session->set_userdata($data);
                redirect('lapor');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password salah!</div>');
                redirect('auth/login');
            }
        } else if($petugas) {
            if (password_verify($password, $petugas['password'])) {
                $data = [
                    'id_petugas' => $petugas['id_petugas'],
                    'nama_petugas' => $petugas['nama_petugas'],
                    'level' => $petugas['level']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password salah!</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Username atau password salah!</div>');
            redirect('auth/login');
        }
    }
}