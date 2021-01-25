<?php

class MUsers extends CI_Model
{

    public function login($data)
    {

        $query = $this->db->get_where("tb_pengguna", ["username" => $data[0], "password" => $data[1]]);
        return $query->row_array();
    }

    public function readJenisKeluhan()
    {
        $query = $this->db->get("tb_jsnkeluhan");
        return $query->result_array();
    }

    public function readKeluhanPelangganById($id)
    {
        $query = $this->db->get_where("tb_keluhanplgn", array("jenis_keluhan" => $id));
        return $query->result_array();
    }
    public function sendKuesioner($data)
    {
        $query = $this->db->insert("tb_kuesioner", $data);
        return $query;
    }
    public function daftarAkun($data)
    {
        $query  = $this->db->insert('tb_pengguna', $data);
        return $query;
    }

    public function getCountUsers()
    {
        $query = $this->db->get("tb_pengguna");
        return $query->num_rows();
    }

    public function getPelangganById($id){
        $query = $this->db->get_where('tb_pengguna', $id);
        return $query;
    }

    public function getUpdateDataPelanggan($id_pengguna, $username, $nama, $alamat, $no_telp){
        $data = array('username' => $username,
                      'nama' => $nama,
                      'alamat' => $alamat,
                      'no_telp' => $no_telp);
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update('tb_pengguna', $data);
    }

    public function getCustomer($col, $data, $limit, $start)
    {
        $query = $this->db->where($col, $data);
        $query = $this->db->limit($limit, $start)->get("tb_pengguna");
        return $query->result_array();
    }

    public function getKategori()
    {
        $query = $this->db->get("tb_jsnkeluhan");
        return $query->result_array();
    }

    public function getReport(){
        $query = $this->db->from("tb_keluhanplgn")->join("tb_jsnkeluhan","tb_jsnkeluhan.id_jnskeluhan = tb_keluhanplgn.jenis_keluhan")->get();
        return $query->result_array();
    }

    public function checkDataCustomer($search)
    {
    
        $query = $this->db->get_where("tb_pengguna",$search);
        return $query->num_rows();
    }

    public function addUsers($data){
        $query = $this->db->insert("tb_pengguna",$data);
        return $query;
    }

    public function removeUsers($data){
        $this->db->where("id_pengguna", $data);
        $this->db->delete("tb_pengguna");
    }
}
