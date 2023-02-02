<div class="container-fluid text-dark">
    <h3>EDIT DATA INVOICE</h3>

    <?php foreach ($produk as $p) : ?>
    <form method="POST" action="<?= base_url('Transaksi/update') ?>">

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="hidden" name="no_penjualan" class="form-control" value="<?= $p->no_penjualan ?>">
            <input type="text" name="nama_produk" class="form-control" value="<?= $p->nama_produk ?>">
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="text" name="tanggal" class="form-control" value="<?= $p->tanggal ?>">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?= $p->harga ?>">
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jumlah" class="form-control" value="<?= $p->jumlah ?>">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input type="text" name="total" class="form-control" value="<?= $p->total ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </form>

    <?php endforeach; ?>
</div>