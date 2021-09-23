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
            <h4><strong> Detail Usaha</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_usaha?></td>
            </tr>

            <tr>
                <th>Nama</th>
                <td><?php echo $detail->nama_usaha?></td>
            </tr>

            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $detail->tempat_lahir_usaha?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->ttl_usaha?></td>
            </tr>

            <tr>
                <th>Pekerjaan</th>
                <td><?php echo $detail->pekerjaan_usaha?></td>
            </tr>
            
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_usaha?></td>
            </tr>

            <tr>
                <th>No. NIK KTP</th>
                <td><?php echo $detail->no_ktp_usaha?></td>
            </tr>

            <tr>
                <th>Jenis Usaha</th>
                <td><?php echo $detail->jenis_usaha?></td>
            </tr>

            <tr>
                <th>Status Kepemilikan Tempat</th>
                <td><?php echo $detail->statuskepemilikan_usaha?></td>
            </tr>

            <tr>
                <th>Nama Usaha</th>
                <td><?php echo $detail->bank_usaha?></td>
            </tr>

            <tr>
                <th>Lokasi</th>
                <td><?php echo $detail->lokasi_usaha?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_usaha?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('usaha/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>


