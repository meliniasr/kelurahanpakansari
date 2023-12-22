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
            <h4><strong> Detail Tidak Sengketa</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_tidaksengketa ?></td>
            </tr>

            <tr>
                <th>Nama Pemohon</th>
                <td><?php echo $detail->nama_pemohon_tidaksengketa ?></td>
            </tr>

            <tr>
                <th>Surat Kepemilikan</th>
                <td><?php echo $detail->suratkepemilikan_tidaksengketa ?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_tidaksengketa ?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_tidaksengketa ?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('tidaksengketa/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>

