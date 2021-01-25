<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("mreport");
        $this->load->model("musers");
    }

    public function index()
    {

        $data['users'] = $this->session->userdata('users');
        $data['jenisKeluhan'] = $this->musers->readJenisKeluhan();
        $this->load->view("layout/navigation", $data);
        $this->load->view("layout/header");
        $this->load->view("index_v");
        $this->load->view("layout/footer");
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function sendReport()
    {
        $report = $this->input->post("keluhan");
        $message = $this->input->post("pesan");
        $idPelanggan = $this->session->userdata("users")['id_pengguna'];
        $tanggal = date('Y-m-d');


        if (!empty($report) && !empty($message)) {
            $data = array(
                "id_pelanggan" => $idPelanggan,
                "keluhan" => $report,
                "tanggal" => $tanggal,
                "pesan" => $message
            );

            $this->mreport->sendReport($data);
            $this->session->set_flashdata('message', 'Data Keluhan berhasil Diterima');
            $this->session->set_flashdata('istrue', "Sukses");
            redirect(base_url());
        } else {
            $this->session->set_flashdata('message', 'Lengkapi Data Keluhan,silahkan coba lagi!');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url());
        }
    }

    public function keluhanPelanggan()
    {
        $idJenis = $this->uri->segment(3);
        $result = $this->musers->readKeluhanPelangganById($idJenis);
        header('Content-type: application/json');
        echo json_encode($result);
    }


    public function tambahKuesioner()
    {
        $pertanyaan_satu = $this->input->post('pertanyaan_satu');
        foreach ($pertanyaan_satu as $obj_satu) {
            $objsatu = $obj_satu;
        }
        $pertanyaan_dua = $this->input->post('pertanyaan_dua');
        foreach ($pertanyaan_dua as $obj_dua) {
            $objdua = $obj_dua;
        }
        $pertanyaan_tiga = $this->input->post('pertanyaan_tiga');
        foreach ($pertanyaan_tiga as $obj_tiga) {
            $objtiga = $obj_tiga;
        }
        $pertanyaan_empat = $this->input->post('pertanyaan_empat');
        foreach ($pertanyaan_empat as $obj_empat) {
            $objempat = $obj_empat;
        }
        $pertanyaan_lima = $this->input->post('pertanyaan_lima');
        foreach ($pertanyaan_lima as $obj_lima) {
            $objlima = $obj_lima;
        }
        $pesan = $this->input->post('pesan');

        if (!($objsatu) || !($objdua) || !($objtiga) || !($objempat) || !($objlima) || !($pesan)) {
            $this->session->set_flashdata('message', 'Kuesioner Gagal Dikirim,Lengkapi Data !');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url());
        } else {
            $idPelanggan = $this->session->userdata("users")['id_pengguna'];
            $data = array(
                'id_pelanggan' => $idPelanggan,
                'pertanyaan_satu' => $objsatu,
                'pertanyaan_dua' => $objdua,
                'pertanyaan_tiga' => $objtiga,
                'pertanyaan_empat' => $objempat,
                'pertanyaan_lima' => $objlima,
                'pesan' => $pesan
            );
            $this->musers->sendKuesioner($data);
            $this->session->set_flashdata('message', 'Hasil Kuisoner Kami Terima,Terimakasih.');
            $this->session->set_flashdata('istrue', "Sukses");
            redirect(base_url());
        }
    }
    public function alternatifNumber()
    {
        $number = $this->input->post('number');
        $data = $this->musers->readJenisKeluhan();
        $count = count($data);
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $newData[$data[$i]['jenis_keluhan']] = $number[$i] / $count;
            $result = $newData;
        }
        $max = max($result);
        $index = array_search($max, $result);
        echo json_encode(['max'=>$max,'name'=>$index]);
    }
}
