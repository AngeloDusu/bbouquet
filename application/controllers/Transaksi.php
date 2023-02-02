<?php

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Transaksi_model->tampil_data()->result();
        $data['kategori'] = $this->Transaksi_model->tampil_kategori();
        $data['kategori'] = $this->Transaksi_model->get_harga();
        #$data['kategori'] = $this->Transaksi_model->get_total();
        #$data['sum_total'] = $this->Transaksi_model->get_sum();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer',);
    }
    public function tambah_aksi()
    {

        $produk = $this->db->get_where('tb_invoice', 'id');
        #$this->form_validation->set_rules(
        #    'no_penjualan',
        #    'Nomor Penjualan',
        #    'required',
        #    [
        ##'required' => 'Nomor Penjualan Harus diisi',

        #    ]
        #);
        $this->form_validation->set_rules(
            'nama_produk',
            'Nama Produk',
            'required',
            [
                'required' => 'Nama Produk Harus diisi',

            ]
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'FORM INPUT';
            $this->load->view('transaksi/index', $data);
        } else {
            # $no_penjualan  = $this->input->post('no_penjualan');
            $nama_produk  = $this->input->post('nama_produk');
            $kategori  = $this->input->post('kategori');
            $tanggal  = $this->input->post('tanggal');
            $harga  = $this->input->post('harga');
            $jumlah  = $this->input->post('jumlah');
            $total  = $harga * $jumlah;


            $data = array(
                #'no_penjualan' => $no_penjualan,
                'nama_produk' => $nama_produk,
                'kategori' => $kategori,
                'tanggal' => $tanggal,
                'harga' => $harga,
                'jumlah' => $jumlah,
                'total' => $total,

            );
            #$data['total'] = $this->db->insert('tb_invoice', $data);
            $this->db->insert('tb_invoice', $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            SEMUA HARUS DIISI</div>');
            redirect('Transaksi/index');
        }
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['produk'] = $this->Transaksi_model->edit_barang($where, 'tb_invoice')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/edit_invoice', $data);
        $this->load->view('templates/footer',);
    }


    public function update()
    {
        $no_penjualan  = $this->input->post('no_penjualan');
        $nama_produk  = $this->input->post('nama_produk');
        $tanggal  = $this->input->post('tanggal');
        $harga  = $this->input->post('harga');
        $jumlah  = $this->input->post('jumlah');
        $total  = $this->input->post('total');


        $data = array(
            'no_penjualan' => $no_penjualan,
            'nama_produk' => $nama_produk,
            'tanggal' => $tanggal,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'total' => $total,


        );

        $where = array(
            'no_penjualan' => $no_penjualan
        );

        $this->Transaksi_model->update_data($where, $data, 'tb_invoice');
        redirect('Transaksi/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Transaksi_model->hapus_data($where, 'tb_invoice');
        redirect('Transaksi/index');
    }

    public function print()
    {
        $data['title'] = 'Print Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Transaksi_model->tampil_data()->result();



        $this->load->view('transaksi/print_invoice', $data);
    }
}