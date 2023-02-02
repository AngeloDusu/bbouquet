<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (validation_errors()) { ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
    <?php } ?>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah_produk"><i
            class="fas fa-plus m-2"></i>Tambah
        Produk</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">image</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($produk as $p) : ?>
            <tr>
                <?= $this->session->flashdata('pesan'); ?>
                <td><?= $no++ ?></td>

                <td><?= $p->keterangan ?></td>
                <td><?= $p->kategori ?></td>
                <td><?= $p->harga ?></td>
                <td><?= $p->stok ?></td>
                <td><?= $p->img ?></td>



                <td>
                    <?= anchor('Product/edit/' . $p->id_produk, '<div class="btn btn-success btn-sm"><i class="fas fa-pen"></i></div>') ?>

                </td>
                <td>
                    <?= anchor('Product/hapus/' . $p->id_produk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>

            </tr>

            <?php endforeach; ?>
        </thead>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Form Tambah Produk</h1>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <form action="<?= base_url('Product/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">


                        <label for="kategori">Kategori</label>

                        <select name="kategori" id="kategori" class="form-control">
                            <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>

                        <input type="text" name="harga" class="form-control" value="<?= $k['harga'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" name="img" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>