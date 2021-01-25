<?php

class MReport extends CI_Model
{

    public function sendReport($data)
    {
        $query = $this->db->insert("tb_keluhan", $data);
        return $query;
    }

    public function getCountReport($where, $value)
    {
        $this->db->where($where, $value);
        $query = $this->db->get("tb_keluhan");

        return $query->num_rows();
    }
    public function getReportJml()
    {

        $query = $this->db->get("tb_keluhan");

        return $query->num_rows();
    }



    public function getReportByWhere($col, $where, $limit, $start)
    {
        $query = $this->db->where($col, $where);
        $query = $this->db->from("tb_keluhan")->join("tb_pengguna", "tb_pengguna.id_pengguna = tb_keluhan.id_pelanggan")->join("tb_keluhanplgn", "tb_keluhanplgn.id_keluhanplgn=tb_keluhan.keluhan")->join("tb_jsnkeluhan", "tb_jsnkeluhan.id_jnskeluhan = tb_keluhanplgn.jenis_keluhan")->order_by('nilai_alternatif', "DESC")->limit($limit, $start)->get();
        return $query->result_array();
    }

    public function getReportCountByCategory($idCategory, $col)
    {
        $query  = $this->db->where($col, $idCategory);
        $query  = $this->db->where("status", "diterima");
        $query = $this->db->get_where("tb_keluhan");
        return $query->num_rows();
    }

    public function getKategoriOne($data)
    {
        $this->db->where("id_keluhanplgn", $data);
        $query = $this->db->get("tb_keluhanplgn");
        return $query->row_array();
    }

    public function getCategoryReport()
    {
        $query = $this->db->select("id_keluhanplgn")->get("tb_keluhanplgn");
        return $query->result_array();
    }

    public function deleteReport($data)
    {
        $this->db->where("id_keluhanplgn", $data);
        $this->db->delete("tb_keluhanplgn");
    }

//ehee
    public function getAllReport()
    {
        $query = $this->db->from("tb_keluhan")->join("tb_pengguna", "tb_pengguna.id_pengguna = tb_keluhan.id_pelanggan")->join("tb_keluhanplgn", "tb_keluhanplgn.id_keluhanplgn=tb_keluhan.keluhan")->join("tb_jsnkeluhan", "tb_jsnkeluhan.id_jnskeluhan = tb_keluhanplgn.jenis_keluhan")->get();
        return $query->result_array();
    }

    public function getCategoryReportCount()
    {

        $query = $this->db->get("tb_keluhanplgn");
        return $query->num_rows();
    }

    public function getKeluhan($col,$where){
        $this->db->where($col,$where);
        $query  = $this->db->from("tb_keluhan")->join("tb_pengguna", "tb_pengguna.id_pengguna = tb_keluhan.id_pelanggan")->join("tb_keluhanplgn", "tb_keluhanplgn.id_keluhanplgn=tb_keluhan.keluhan")->join("tb_jsnkeluhan", "tb_jsnkeluhan.id_jnskeluhan = tb_keluhanplgn.jenis_keluhan")->get();
        return $query->result_array();
    }
    public function getPengecekan(){
        $this->db->group_by('tb_pengecekan.id_keluhan');
        $query = $this->db->from("tb_pengecekan")->join("tb_keluhan", "tb_keluhan.id_keluhan=tb_pengecekan.id_keluhan")->join("tb_pengguna", "tb_pengguna.id_pengguna = tb_keluhan.id_pelanggan")->join("tb_keluhanplgn", "tb_keluhanplgn.id_keluhanplgn=tb_keluhan.keluhan")->join("tb_jsnkeluhan", "tb_jsnkeluhan.id_jnskeluhan = tb_keluhanplgn.jenis_keluhan")->order_by('tanggal', "ASC")->get();
        return $query->result_array();
    }

    public function getCheckingReport($col, $where, $limit, $start)
    {
        $query = $this->db->where($col, $where);
        $query = $this->db->from("tb_pengecekan")->join("tb_keluhan", "tb_keluhan.id_keluhan=tb_pengecekan.id_keluhan")->join("tb_pengguna", "tb_pengguna.id_pengguna = tb_keluhan.id_pelanggan")->join("tb_keluhanplgn", "tb_keluhanplgn.id_keluhanplgn=tb_keluhan.keluhan")->join("tb_jsnkeluhan", "tb_jsnkeluhan.id_jnskeluhan = tb_keluhanplgn.jenis_keluhan")->order_by('tanggal', "ASC")->limit($limit, $start)->get();
        return $query->result_array();
    }

    public function getCountCheck()
    {

        $query = $this->db->get("tb_pengecekan");
        return $query->num_rows();
    }

    public function updateReportStatus($where, $data)
    {
        $query = $this->db->update('tb_keluhan', $data, $where);
        return $query;
    }


    public function updateKeluhan($where, $data)
    {

        $query = $this->db->update('tb_keluhanplgn', $data,$where);
        
        return $query;
    }

    public function statusDone($id, $data)
    {
        $query = $this->db->update('tb_keluhan', $data, $id);
        return $query;
    }

    public function updateValueAlternatif($data, $where)
    {
        $query = $this->db->update('tb_keluhan', $data, $where);
        return $query;
    }

    public function addReportChecking($data)
    {
        $query = $this->db->insert("tb_pengecekan", $data);
        return $query;
    }

    public function addKeluhan($data)
    {
        $query = $this->db->insert("tb_keluhanplgn", $data);
        return $query;
    }

    public function getMaxAltenative()
    {
        $this->db->select_max('nilai_alternatif');
        $this->db->from('tb_keluhan');
        $query = $this->db->get();
        return $query->row();
    }

    public function getMinAltenative()
    {
        $this->db->select_min('nilai_alternatif');
        $this->db->from('tb_keluhan');
        $query = $this->db->get();
        return $query->row();
    }
}
