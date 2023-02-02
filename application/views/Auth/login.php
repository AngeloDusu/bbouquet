<div class="container-xl">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-50">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="p-5">
                                <div class="text-center">
                                    <div class="logo"> <img class="center"
                                            src="<?= base_url('assets/img/logo/bbouquet-removebg-preview.png') ?>">
                                        <style>
                                        .logo {
                                            width: 100px;
                                            height: 100px;
                                            align-items: center;
                                        }

                                        .img {
                                            align-items: center;
                                            width: 100px;
                                        }
                                        </style>
                                    </div>
                                </div>

                                <form style="width: 30rem;" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="fw-bold mb-3 mt-3 pb-3 pt-3 text-center text-light bg-dark text-lg"
                                        style="letter-spacing: 1px;">Beautiful Bouquet
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg" id="email" name="email"
                                            placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="alert alert-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" class="form-control form-control-lg" id="password"
                                            name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="alert alert-danger pl-3">', '</small>') ?>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                                    </div>


                                    <div class="text-center">
                                        <a class="large" href="<?= base_url('auth/registration/') ?>">Create an
                                            Account!</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>