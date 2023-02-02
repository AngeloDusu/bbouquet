<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row text-center">


        <?php foreach ($produk as $p) : ?>
        <div class="card m-2 text-dark" style="width: 15rem;">
            <img src="<?php echo base_url() . '/uploads/' . $p->img ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title mb-1"><?= $p->nama_produk ?></h5>
                <small> <?= $p->keterangan ?></small>
                <span class="badge bg-light mb-3">Rp. <?= $p->harga ?></span><br>
            </div>
        </div>

        <?php endforeach; ?>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->