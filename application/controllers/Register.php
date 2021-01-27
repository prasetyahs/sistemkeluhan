<?php

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("musers");
    }

    public function index()
    {
        $this->load->view("register_v");
    }


    public function buatAkun()
    {
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $password = $this->input->post('password');

        if (!($username) || !($nama) || !($alamat) || !($no_telp) || !($password)) {
            $this->session->set_flashdata('message', 'Gagal Daftar Akun,Silahkan Coba Lagi!');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url().'register');
        } else {
            $data = array(
                'username' => $username,
                'nama' => $nama,
                'alamat' => $alamat,
                'no_telp' => $no_telp,
                'password' => md5($password),
                'tipe'=>'pelanggan'
            );

            $this->musers->daftarAkun($data);
            redirect(base_url() . 'login');
        }
    }
}
