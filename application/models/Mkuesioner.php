<?php

class MKuesioner extends CI_Model
{


    public function readData()
    {
        $query = $this->db->from("tb_kuesioner")->join("tb_pengguna", "tb_pengguna.id_pengguna = tb_kuesioner.id_pelanggan")->get();
        return $query->result_array();
    }
}
