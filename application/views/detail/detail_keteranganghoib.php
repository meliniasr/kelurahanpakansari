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
            <h4><strong> Detail Keterangan Ghoib</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_ghoib?></td>
            </tr>

            <tr>
                <th>Nama</th>
                <td><?php echo $detail->nama_ghoib?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $detail->tempat_lahir_ghoib?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->ttl_lahir_ghoib?></td>
            </tr>

            <tr>
                <th>Pekerjaan</th>
                <td><?php echo $detail->pekerjaan_ghoib?></td>
            </tr>
            
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detail->jenis_kelamin_ghoib?></td>
            </tr>

            <tr>
                <th>Agama</th>
                <td><?php echo $detail->agama_ghoib?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_ghoib?></td>
            </tr>

            <tr>
                <th>No. Surat Nikah</th>
                <td><?php echo $detail->no_suratnikah_ghoib?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_ghoib?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('keteranganghoib/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>

