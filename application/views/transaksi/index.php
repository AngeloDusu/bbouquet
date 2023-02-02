<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (validation_errors()) { ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
    <?php } ?>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah_invoice"><i
            class="fas fa-plus "></i>Tambah Data Invoice</a>
    <a class="btn btn-danger mb-3" href="<?= base_url('Transaksi/print') ?>"><i class="fas fa-print "></i>Print</a>
    <table class="table table-hover">
        <thead>
            <tr>

                <th scope="col">No Penjualan</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                <th colspan="3">Action</th>

            </tr>
            <?php
            $no_penjualan = 1;
            foreach ($produk as $p) : ?>
            <tr>

                <td><?= $no_penjualan++ ?></td>
                <td><?= $p->nama_produk ?></td>
                <td><?= $p->kategori ?></td>
                <td><?= $p->tanggal ?></td>
                <td><?= $p->harga ?></td>
                <td><?= $p->jumlah ?></td>
                <td><?= $p->total ?></td>


                <td>
                    <?= anchor('Transaksi/edit/' . $p->id, '<div class="btn btn-success btn-sm"><i class="fas fa-pen"></i></div>') ?>

                </td>
                <td>
                    <?= anchor('Transaksi/hapus/' . $p->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>




                <?php endforeach; ?>
        </thead>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_invoice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Form Tambah Data Invoice</h1>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <form action="<?= base_url('Transaksi/tambah_aksi'); ?> " method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>
                    <div class="form-group">


                        <label for="kategori">Kategori</label>

                        <select name="kategori" id="kategori" class="form-control">
                            <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['kategori'] ?>"><?= $k['kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>tanggal</label>
                        <input type="text" name="tanggal" class="form-control" value="<?= date('d/m/Y') ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>harga</label>

                        <input type="text" name="harga" value="<?= $k['harga'] ?>" class="form-control">

                    </div>
                    <div class="col">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control">
                    </div>
                    <div class="row g-3">
                        <!--
                        <div class="col">
                            <label>Total</label>
                            <input type="text" name="total" class="form-control" value="" readonly>
                        </div>
                            -->
                    </div>

            </div>
            <div class=" modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>