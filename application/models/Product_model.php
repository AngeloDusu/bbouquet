<?php

class Product_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_produk');
    }
    public function tampil_kategori()
    {
        return $this->db->get('tb_kategori')->result_array();
    }
    public function get_harga()
    {
        return $this->db->get('tb_kategori')->result_array();
    }

    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table,);
    }


    public function ambil_kategori()
    {
    }
}