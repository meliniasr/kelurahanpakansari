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
            <h4><strong> Detail Belum Pernah Menikah</strong></h4>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Tanggal</th>
                    <td><?php echo $detail->tgl_bpm ?></td>
                </tr>

                <tr>
                    <th>Nama Pemohon</th>
                    <td><?php echo $detail->nama_pemohon_bn ?></td>
                </tr>

                <tr>
                    <th>Tempat Tgl Lahir</th>
                    <td><?php echo $detail->ttl_lahir_bpm ?></td>
                </tr>

                <tr>
                    <th>No. NIK KTP</th>
                    <td><?php echo $detail->nik_bpm ?></td>
                </tr>

                <tr>
                    <th>Pekerjaan</th>
                    <td><?php echo $detail->pekerjaan_bpm ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $detail->jenis_kelamin_bpm ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td><?php echo $detail->alamat_bpm ?></td>
                </tr>

                <tr>
                    <th>Tujuan</th>
                    <td><?php echo $detail->tujuan_bpm ?></td>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $detail->keterangan_bpm ?></td>
                </tr>
            </table>

            <a href="<?php echo base_url('belumpernahmenikah/index'); ?>" class="btn btn-primary">Kembali</a>

        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>