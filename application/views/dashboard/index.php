<div class="container-fluid">
    <div class="row text-center">


        <?php foreach ($produk as $p) : ?>
        <div class="card m-2" style="width: 15rem;">
            <img src="<?php echo base_url() . '/uploads/' . $p->img ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?= $p->nama_produk ?></h5>
                <small> <?= $p->keterangan ?></small>
                <span class="badge bg-light mb-3">Rp. <?= $p->harga ?></span><br>

                <a href="#" class="btn btn-sm btn-success">detail</a>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>