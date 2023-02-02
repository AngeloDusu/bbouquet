<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-dark"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6 text-dark">

            <?= $this->session->flashdata('message'); ?>

            <h5>Role : <?= $role['role']; ?></h5>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nama as $n) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $n['nama']; ?></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                    <?= check_access($role['id'], $n['id']); ?> data-role="<?= $role['id']; ?>"
                                    data-menu="<?= $n['id']; ?>">
                            </div>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     