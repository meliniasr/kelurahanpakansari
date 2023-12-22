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
            <h4><strong> Detail Penduduk Datang</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Nama</th>
                <td><?php echo $detail->nama_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $detail->tempat_lahir_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->ttl_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Pekerjaan</th>
                <td><?php echo $detail->pekerjaan_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detail->jenis_kelamin_pendudukdatang?></td>
            </tr>

            <tr>
                <th>No. NIK KTP</th>
                <td><?php echo $detail->nik_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Alamat Datang</th>
                <td><?php echo $detail->alamat_datang_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Alamat Asal</th>
                <td><?php echo $detail->alamat_asal_pendudukdatang?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_pendudukdatang?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('pendudukdatang/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>


