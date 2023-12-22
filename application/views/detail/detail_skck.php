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
            <h4><strong> Detail SKCK</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_skck?></td>
            </tr>

            <tr>
                <th>Nama</th>
                <td><?php echo $detail->nama_skck?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $detail->tempat_lahir_skck?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->ttl_skck?></td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detail->jenis_kelamin_skck?></td>
            </tr>
            
            <tr>
                <th>Status Perkawinan</th>
                <td><?php echo $detail->status_perkawinan_skck?></td>
            </tr>

            <tr>
                <th>Agama</th>
                <td><?php echo $detail->agama_skck?></td>
            </tr>

            <tr>
                <th>Pendidikan Terakhir</th>
                <td><?php echo $detail->pendidikan_terakhir_skck?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_skck?></td>
            </tr>

            <tr>
                <th>No. NIK KTP</th>
                <td><?php echo $detail->nik_skck?></td>
            </tr>

            <tr>
                <th>Untuk Keperluan</th>
                <td><?php echo $detail->tujuan_skck?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_skck?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('skck/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>

