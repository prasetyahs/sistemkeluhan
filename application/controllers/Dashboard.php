<?php


class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        global $users;
        $this->load->library('pdf');
        $this->load->model("musers");
        $this->load->model("mreport");
        $this->load->model("mKuesioner");
        $users = $this->session->userdata('users');
        if (!empty($users) && $users['tipe'] != "admin" && $users['tipe'] != "pengawas") {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['countReport'] = $this->mreport->getReportJml();
        $data['countUsers'] = $this->musers->getCountUsers();
        $data['countCategoryReport'] = $this->mreport->getCategoryReportCount();
        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside", $data);
        $this->load->view("admin/dashboard_v", $data);
        $this->load->view("admin/includes/footer");
    }

    
    public function dataKeluhan()
    {

        $category = $this->mreport->getCategoryReport();
        $result = [];
        foreach ($category as  $value) {
            $newData =  $this->mreport->getReportCountByCategory($value['id_keluhanplgn'], "keluhan") / $this->mreport->getCategoryReportCount();
            array_push($result, $newData);
            $this->mreport->updateValueAlternatif(['nilai_alternatif' => $newData], ['keluhan' => $value['id_keluhanplgn']]);
        }
        $data['max'] = $this->mreport->getMaxAltenative()->nilai_alternatif;
        $data['min'] = $this->mreport->getMinAltenative()->nilai_alternatif;
        $limit_page = 8;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $data['results'] = $this->mreport->getReportByWhere("status", "Diterima", $limit_page, $page * $limit_page);
        $config['base_url'] = base_url() . 'dashboard/dataKeluhan';
        $total = $this->mreport->getCountReport("status", "Diterima");
        $config['total_rows'] = $total;
        $config['per_page'] = $limit_page;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '« First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '<li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '<li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();
        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside");
        $this->load->view("admin/data_keluhan_v", $data);
        $this->load->view("admin/includes/footer");
    }

    public function processStatus()
    {
        $id = $this->uri->segment(3);
        $result = $this->mreport->updateReportStatus(["id_keluhan" => $id], ['status' => "Sedang diproses"]);
        if ($result) {
            $data = array(
                'id_keluhan' => $id,
                'id_pengawas' => $this->session->userdata('users')['id_pengguna']
            );
            $insert = $this->mreport->addReportChecking($data);
            if ($insert) {
                $this->session->set_flashdata('message', 'Sukses merubah status diproses');
                $this->session->set_flashdata('istrue', "Sukses");
            } else {
                $this->session->set_flashdata('message', 'Gagal merubah status diproses!');
                $this->session->set_flashdata('istrue', "Gagal");
            }
            redirect(base_url() . "dashboard/datakeluhan");
        }
    }

    public function dataPelanggan()
    {
        $limit_page = 8;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total = $this->musers->getCountUsers();
        if ($total > 0) {
            $data['results'] = $this->musers->getCustomer("tipe", "pelanggan", $limit_page, $page * $limit_page);
            $config['base_url'] = base_url() . 'dashboard/dataPelanggan';
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = '« First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_link'] = 'Last &raquo';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '<li>';
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '<li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['uri_segment'] = 3;
            $this->pagination->initialize($config);
            $data['links'] = $this->pagination->create_links();
        }
        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside", $data);
        $this->load->view("admin/data_pelanggan_v", $data);
        $this->load->view("admin/includes/footer");
    }
    public function laporan()
    {

        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside",);
        $this->load->view("admin/laporan_v");
        $this->load->view("admin/includes/footer");
    }
    public function tambahDataKeluhan()
    {

        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside",);
        $this->load->view("admin/tambah_data_keluhan_v");
        $this->load->view("admin/includes/footer");
    }

    public function dataCategory()
    {
        $data['kategori'] = $this->musers->getKategori();
        $data['keluhan'] = $this->musers->getReport();
        // print_r($data['keluhan']);die;
        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside");
        $this->load->view("admin/data_kategori_v", $data);
        $this->load->view("admin/includes/footer");
    }

    public function editForm(){
        $id = $this->uri->segment(3);
        // $nama =$this->mreport->
        $data['report'] = $this->mreport->getKategoriOne($id);
        $data['kategori'] = $this->musers->getKategori();
        
        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside");
        $this->load->view("admin/edit_kategori_v", $data);
        $this->load->view("admin/includes/footer");
    }

    public function deleteReport(){
        $id = $this->uri->segment(3);
        $this->mreport->deleteReport($id);
        $this->session->set_flashdata('message', 'Sukses Hapus Data');
        $this->session->set_flashdata('istrue', "Sukses");
        redirect(base_url() . "dashboard/datacategory");
    }

    public function updateKatagoriKeluhan(){
        $id = $this->input->post("id");
        $jenis = $this->input->post("jeniskeluhan");
        $nama= $this->input->post("nama");
        if($jenis !=null && $nama !=null){
            $data = array("jenis_keluhan"=>$jenis,"nama_keluhanplgn"=>$nama);
            $this->mreport->updateKeluhan(['id_keluhanplgn'=>$id], $data);
            
            $this->session->set_flashdata('message', 'Sukses update');
            $this->session->set_flashdata('istrue', "Sukses");
            redirect(base_url()."dashboard/dataCategory");
        }else{
            $this->session->set_flashdata('message', 'Gagal update');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url()."dashboard/dataCategory");
        }
    }

    public function dataKuesioner()
    {
        $data['kuesioner'] = $this->mKuesioner->readData();
        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside");
        $this->load->view("admin/data_kuesioner_v", $data);
        $this->load->view("admin/includes/footer");
    }

    public function getEditPelangganById()
    {
        $id = $this->uri->segment(3);
        $result = $this->musers->getPelangganById(["id_pengguna" => $id]);
        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $dataUsers = array(
                'id_pengguna' => $i['id_pengguna'],
                'username' => $i['username'],
                'nama' => $i['nama'],
                'alamat' => $i['alamat'],
                'no_telp' => $i['no_telp']
            );
            $this->load->view("admin/includes/head");
            $this->load->view("admin/includes/navtop_navside");
            $this->load->view("admin/edit_pelanggan_v", $dataUsers);
            $this->load->view("admin/includes/footer");
        } else {
            $this->session->set_flashdata('message', 'Id yang dicari tidak ada');
            $this->session->set_flashdata('istrue', "Gagal");
        }
    }

    public function updateDataPelanggan()
    {
        $id_pengguna = $this->input->post("id_pengguna");
        $username = $this->input->post("username");
        $nama = $this->input->post("nama");
        $alamat = $this->input->post("alamat");
        $no_telp = $this->input->post("no_telp");

        if (empty($username) || empty($nama) || empty($alamat) || empty($no_telp)) {
            $this->session->set_flashdata('message', 'Gagal update');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url() . "dashboard/dataPelanggan");
        } else {
            $this->session->set_flashdata('message', 'Sukses update');
            $this->session->set_flashdata('istrue', "Sukses");
            $this->musers->getUpdateDataPelanggan($id_pengguna, $username, $nama, $alamat, $no_telp);
            redirect(base_url() . "dashboard/dataPelanggan");
        }
    }

    public function dataPengecekan()
    {

        $limit_page = 3;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $data['results'] =     $data['results'] = $this->mreport->getReportByWhere("status !=", "diterima", $limit_page, $page * $limit_page);
        $config['base_url'] = base_url() . 'dashboard/datapengecekan';
        $total = $this->mreport->getCountReport("status", "sedang diproses");
        $config['total_rows'] = $total;
        $config['per_page'] = $limit_page;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '« First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '<li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '<li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();

        $this->load->view("admin/includes/head");
        $this->load->view("admin/includes/navtop_navside");
        $this->load->view("admin/data_pengecekan_v", $data);
        $this->load->view("admin/includes/footer");
    }

    public function statusSelesaiDiperbaiki()
    {
        $id = $this->uri->segment(3);
        $result = $this->mreport->statusDone(["id_keluhan" => $id], ['status' => "Selesai diperbaiki"]);
        if ($result) {
            $data = array(
                'id_keluhan' => $id,
                'id_pengawas' => $this->session->userdata('users')['id_pengguna']
            );
            $insert = $this->mreport->addReportChecking($data);
            if ($insert) {
                $this->session->set_flashdata('message', 'Sukses merubah status jadi Selesai Diperbaiki');
                $this->session->set_flashdata('istrue', "Sukses");
            } else {
                $this->session->set_flashdata('message', 'Gagal merubah status jadi Selesai Diperbaiki!');
                $this->session->set_flashdata('istrue', "Gagal");
            }
            redirect(base_url() . "dashboard/datapengecekan");
        }
    }

    public function addKeluhan()
    {
        $nama = $this->input->post("namakeluhan");
        $jenis = $this->input->post("jeniskeluhan");
        if ($nama != null && $jenis != null) {
            $data = array(
                'jenis_keluhan' => $jenis,
                'nama_keluhanplgn' => $nama
            );
            $this->mreport->addKeluhan($data);
            $this->session->set_flashdata('message', 'Sukses Tambah Keluahan');
            $this->session->set_flashdata('istrue', "Sukses");
            redirect(base_url() . "dashboard/datacategory");
        } else {
            $this->session->set_flashdata('message', 'Gagal Tambah Keluahan');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url() . "dashboard/datacategory");    
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function saveCustomer()
    {
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));
        $notelp = $this->input->post("no_telp");
        $nama = $this->input->post("nama");
        $alamat = $this->input->post("alamat");
        if (!empty($username) && !empty($password) && !empty($notelp) && !empty($nama) && !empty($alamat)) {
            $data = array(
                "username" => $username,
                "password" => $password,
                "no_telp" => $notelp,
                "nama" => $nama,
                "alamat" => $alamat,
                "tipe" => "pelanggan"
            );
            $checkUsername = $this->musers->checkDataCustomer(["username" => $username]);
            if ($checkUsername > 0) {
                $this->session->set_flashdata('message', 'Username Sudah Dipakai,silahkan coba lagi!');
                $this->session->set_flashdata('istrue', "Gagal");
                redirect(base_url() . "/dashboard/datapelanggan");
            } else {
                $this->musers->addUsers($data);
                $this->session->set_flashdata('message', 'Berhasil di Simpan');
                $this->session->set_flashdata('istrue', "Sukses");
                redirect(base_url() . "/dashboard/datapelanggan");
            }
        } else {
            $this->session->set_flashdata('message', 'Lengkapi Data,silahkan coba lagi!');
            $this->session->set_flashdata('istrue', "Gagal");
            redirect(base_url() . "/dashboard/datapelanggan");
        }
    }

    public function deleteUsers()
    {
        $id = $this->uri->segment(3);
        $this->musers->removeUsers($id);
        redirect(base_url() . "dashboard/datapelanggan");
    }

    public function laporanDataKeluhan(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'LAPORAN DATA KELUHAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DATA KELUHAN',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'NAMA PELANGGAN',1,0);
        $pdf->Cell(50,6,'KELUHAN',1,0);
        $pdf->Cell(25,6,'TANGGAL',1,0);
        $pdf->Cell(30,6,'PESAN',1,0);
        $pdf->Cell(35,6,'NILAI ALTERNATIF',1,0);
        $pdf->SetFont('Arial','',10);
        $keluhan = $this->mreport->getAllReport();
        foreach ($keluhan as $row){
            $pdf->Cell($pdf->GetStringWidth($row['nama'])+10,10,$row['nama'],1,1,'P',FALSE);
            // $pdf->Cell(50,6,$row['nama_keluhanplgn'],1,0);
            // $pdf->Cell(25,6,$row['tanggal'],1,0);
            // $pdf->Cell(30,6,$row['pesan'],1,0);
            // $pdf->Cell(35,6,$row['nilai_alternatif'],1,1);
        }
        $pdf->Output();
    }

    public function cetakLaporan(){
        $data['results'] = $this->mreport->getKeluhan("status", "Diterima");
        $this->load->view("admin/cetak_laporan",$data);
    }

    public function cetakLaporan2(){
        $data['results'] = $this->mreport->getPengecekan();
        $this->load->view("admin/cetak_laporan",$data);
    }
}
