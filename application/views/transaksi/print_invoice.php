<!DOCTYPE html>
<html class="text-dark">

<head>
    <h1 class="h3 mb-4 text-gray-800 text-dark"><?= $title; ?></h1>
</head>


<body>
    <table class="text-dark table table-dark table-striped-columns">
        <tr>

            <th scope="col">No Penjualan</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total</th>

        </tr>
        <?php
        $no_penjualan = 1;
        foreach ($produk as $p) : ?>
        <tr>


            <td><?= $no_penjualan++ ?></td>
            <td><?= $p->nama_produk ?></td>
            <td><?= $p->tanggal ?></td>
            <td><?= $p->harga ?></td>
            <td><?= $p->jumlah ?></td>
            <td><?= $p->total ?></td>

            <?php endforeach; ?>
    </table>
    <script type="text/javascript">
    window.print();
    </script>
</body>

</html>