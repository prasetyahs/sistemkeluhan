<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("musers");
        $checklogin = $this->session->userdata('users');
        if ($checklogin) {
            redirect(base_url());
        }
    }
    public function index()
    {
        $this->load->view("login_v");
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $type = $this->input->post("type");
        if (!empty($username) && !empty($password)) {
            $data = [
                $username,
                md5($password)
            ];
            $result = $this->musers->login($data);
            if ($result > 0 && $result['tipe'] == "pelanggan") {
                $this->session->set_userdata('users', $result);
                redirect(base_url());
            } else if ($result > 0 && $result['tipe'] == "admin") {
                $this->session->set_userdata('users', $result);
                redirect(base_url() . "dashboard/index");
            } else if ($result > 0 && $result['tipe'] == "pengawas") {
                $this->session->set_userdata('users', $result);
                redirect(base_url() . "dashboard/index");
            } else {
                $this->session->set_flashdata('message', 'Username dan password tidak sesuai,Silahkan Coba Lagi');
                redirect(base_url() . 'login');
            }
        } else {
            $this->session->set_flashdata('message', 'username dan password tidak boleh kosong');
            redirect(base_url() . 'login');
        }
    }
}
