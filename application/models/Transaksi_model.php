<?php

class Transaksi_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_invoice');
    }
    public function tampil_kategori()
    {
        return $this->db->get('tb_kategori')->result_array();
    }
    public function get_harga()
    {
        return $this->db->get('tb_kategori')->result_array();
    }
    #public function get_total()
    #{
    ##$sql = "SELECT (harga*jumlah) as total FROM tb_invoice ORDER BY id";
    ##return $this->db->query($sql);
    #}
    #public function get_sum()
    #{
    ##$this->db->select_sum('total', 'total');
    ##$this->db->from('tb_invoice');
    ##return $this->db->get('');
    #}


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
}