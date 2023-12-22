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
            <h4><strong> Detail Kelahiran</strong></h4>

            <table class="table table-striped table-bordered">
                <tr>
                <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_kelahiran?></td>
            </tr>

            <tr>
                <th>Nama Anak</th>
                <td><?php echo $detail->nama_anak_kelahiran?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $detail->tempat_lahir_kelahiran?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->ttl_kelahiran?></td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detail->jenis_kelamin_kelahiran?></td>
            </tr>

            <tr>
                <th>Nama Bapak</th>
                <td><?php echo $detail->nama_bapak_kelahiran?></td>
            </tr>

            <tr>
                <th>Nama Ibu</th>
                <td><?php echo $detail->nama_ibu_kelahiran?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_kelahiran?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_kelahiran?></td>
            </tr>
            </table>

            <a href="<?php echo base_url('kelahiran/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>

