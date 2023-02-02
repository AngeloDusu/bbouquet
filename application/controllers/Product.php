<?php

class Product extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Product Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Product_model->tampil_data()->result();
        $data['kategori'] = $this->Product_model->tampil_kategori();
        $data['kategori'] = $this->Product_model->get_harga();



        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer',);
    }

    public function tambah_aksi()
    {
        $data['kategori'] = $this->Product_model->ambil_kategori();

        $data['kategori'] = $this->db->get('tb_kategori')->result_array();
        $data['kategori'] = $this->Product_model->get_harga();

        $this->form_validation->set_rules(
            'Keterangan',
            'Nama Produk',
            'required',
            [
                'required' => 'Nama Produk Harus diisi',

            ]
        );


        $keterangan  = $this->input->post('keterangan');
        $kategori  = $this->input->post('kategori');
        $harga  = $this->input->post('harga');
        $stok  = $this->input->post('stok');
        $img = $_FILES['img']['name'];

        if ($img) {
        } else {
            $config['upload_path'] = '/uploads';
            $config['allowed_type'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('img')) {
                $img = $this->upload->data('file_name');
            } else {
                echo "GAMBAR GAGAL DI UPLOAD";
            }
        }
        $data = array(

            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'img' => $img,
        );

        $this->Product_model->tambah_produk($data, 'tb_produk');
        redirect('Product/index', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Product Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_produk' => $id);
        $data['produk'] = $this->Product_model->edit_barang($where, 'tb_produk')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('produk/edit_barang', $data);
        $this->load->view('templates/footer',);
    }


    public function update()
    {
        $id          = $this->input->post('id_produk');
        $nama_produk    = $this->input->post('nama_produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');


        $data = array(
            'nama_produk' => $nama_produk,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,

        );

        $where = array(
            'id_produk' => $id
        );

        $this->Product_model->update_data($where, $data, 'tb_produk');
        redirect('Product/index');
    }

    public function hapus($id)
    {
        $where = array('id_produk' => $id);
        $this->Product_model->hapus_data($where, 'tb_produk');
        redirect('Product/index');
    }
}