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
            <h4><strong> Detail Domisili Koperasi </strong></h4>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Tanggal</th>
                    <td><?php echo $detail->tgl_koperasi ?></td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td><?php echo $detail->nama_pemilikkoperasi ?></td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td><?php echo $detail->tempat_lahir_koperasi ?></td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo $detail->ttl_lahir_koperasi ?></td>
                </tr>

                <tr>
                    <th>Pekerjaan</th>
                    <td><?php echo $detail->pekerjaan_koperasi ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td><?php echo $detail->alamat_koperasi ?></td>
                </tr>

                <tr>
                    <th>No. NIK KTP</th>
                    <td><?php echo $detail->no_ktp_koperasi ?></td>
                </tr>

                <tr>
                    <th>Jenis Koperasi</th>
                    <td><?php echo $detail->jenis_koperasi ?></td>
                </tr>

                <tr>
                    <th>Status Kepemilikan Tempat</th>
                    <td><?php echo $detail->status_kepemilikan ?></td>
                </tr>

                <tr>
                    <th>Nama Koperasi</th>
                    <td><?php echo $detail->nama_koperasi ?></td>
                </tr>

                <tr>
                    <th>Lokasi</th>
                    <td><?php echo $detail->lokasi_koperasi ?></td>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $detail->keterangan_koperasi ?></td>
                </tr>
            </table>

            <a href="<?php echo base_url('domisilikoperai/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>