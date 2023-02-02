<div class="container-fluid text-dark">
    <h3>EDIT DATA BARANG</h3>

    <?php foreach ($produk as $p) : ?>
    <form method="POST" action="<?= base_url('Product/update') ?>">

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="hidden" name="id_produk" class="form-control" value="<?= $p->id_produk ?>">
            <input type="text" name="keterangan" class="form-control" value="<?= $p->keterangan ?>">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="<?= $p->kategori ?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?= $p->harga ?>">
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control" value="<?= $p->stok ?>">
        </div>
        <tr>
            <td>
                <img src="<?= base_url('/uploads') . $p->img ?>" width="90" height="110">
            </td>
        </tr>

        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </form>

    <?php endforeach; ?>
</div>