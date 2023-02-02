<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card p-10" style="border-radius: 15px;">

                <div class="logo pt-3 ">
                    <img src="<?= base_url('assets/img/logo/bbouquet-removebg-preview.png') ?>">
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

                <div class="card-body p-5">
                    <h3 class="text text-center mb-2 pb-2 pt-3 text-white bg-dark">Create an account</h3>

                    <form style="width: 27rem;" method="POST" action="<?= base_url('auth/registration'); ?>">

                        <div class=" form-outline mb-4">
                            <input type="text" class="form-control form-control-user mb-3" id="name" name="name"
                                placeholder="Full Name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="alert alert-danger ">', '</small') ?>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" class="form-control form-control-user mb-7" id="email" name="email"
                                placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="alert alert-danger pb-2">', '</small') ?>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" class="form-control form-control-user" id="password1"
                                name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class=" alert-danger pb-2">', '</small') ?>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" class="form-control form-control-user" id="password2"
                                name="password2" placeholder="Repeat Password">
                        </div>

                        <button type="submit" class="btn btn-info btn-user btn-block">
                            Register Account
                        </button>

                        <hr class="row justify-content-center">

                        <div class="text-center">
                            <a class="large" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>