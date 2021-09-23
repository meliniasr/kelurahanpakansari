<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.card-header -->
    <div class="card-body" style="margin-left: 400px;">
        <div class="row">
            <div class="col-6">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url() ?>assets/dist/img/user.png" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">
                            <?php
                            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
                            echo '' .  $data['user']['username'];
                            ?>
                        </h3>

                        <p class="text-muted text-center"> </p>

                        <strong><i class="fas fa-user"></i>Nama Lengkap</strong>
                        <p class="text-muted"><?= $user['name']; ?></p>
                        <hr>

                        <strong>
                            <i class="far fa-envelope"></i> Email
                        </strong>
                        <p class="text-muted">
                            <?= $user['email']; ?>
                        </p>
                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>
                        <p class="text-muted"><?= $user['alamat']; ?></p>
                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Posisi Pekerjaan di Kelurahan Pakansari</strong>
                        <p class="text-muted">
                            <?= $user['posisi_pekerjaan']; ?>
                        </p>
                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> No. Telp / Hp</strong>
                        <p class="text-muted"> <?= $user['no_hp']; ?></p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
</div>