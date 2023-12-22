    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="<?php echo base_url() ?>assets/dist/img/logo_kelurahan.png" height="60" width="60">
                <br>
                <a class="h3"> <b>KELURAHAN PAKANSARI</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Pendaftaran</p>

                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                        <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
                    </div>

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
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-map-marker-alt mr-1"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                        <?= form_error('alamat', ' <small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="posisi_pekerjaan" name="posisi_pekerjaan" placeholder="Posisi Pekerjaan" value="<?= set_value('posisi_pekerjaan'); ?>">
                        <?= form_error('posisi_pekerjaan', ' <small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Hp" value="<?= set_value('no_hp'); ?>">
                        <?= form_error('no_hp', ' <small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Kata Sandi">
                        <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulang Kata Sandi">
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    Saya setuju dengan <a href="#">persyaratannya </a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="<?= base_url('auth'); ?>" class="text-center">Sudah Memiliki Akun? Masuk!</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->