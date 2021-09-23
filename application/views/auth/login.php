    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="<?php echo base_url() ?>assets/dist/img/logo_kelurahan.png" height="60" width="60">
                <br>
                <a class="h3"> <b>KELURAHAN PAKANSARI</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Halaman Masuk Anggota</p>

                <?= $this->session->flashdata('message'); ?>

                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                        <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                        <?= form_error('password', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block" style="margin-left: 110px;">Masuk</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>

            <p class="mb-0">
                <a href="<?= base_url('auth/registration'); ?>" class="text-center">Daftar Sebagai Anggota</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->