<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div class="callout callout-info">
            <h4><strong> Detail Kependudukkan E-KTP & KK</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_kp?></td>
            </tr>

            <tr>
                <th>E-KTP</th>
                <td><?php echo $detail->nik_kp?></td>
            </tr>

            <tr>
                <th>KK</th>
                <td><?php echo $detail->kk_kp?></td>
            </tr>

            <tr>
                <th>Nama Pemohon</th>
                <td><?php echo $detail->nama_pemohon_kp?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $detail->tempat_lahir_kp?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->ttl_kp?></td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detail->jenis_kelamin_kp?></td>
            </tr>

            <tr>
                <th>Status Hubungan Dengan Kepala Keluarga</th>
                <td><?php echo $detail->status_kp?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_kp?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_kp?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('kependudukkan/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>



