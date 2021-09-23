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
            <h4><strong> DETAIL SURAT MASUK </strong></h4>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Tanggal Pengiriman Surat</th>
                    <td><?php echo $detail->tgl_pengiriman ?></td>
                </tr>

                <tr>
                    <th>Nama Instansi Yg Mengirimkan Surat</th>
                    <td><?php echo $detail->nama_instansi_sm ?></td>
                </tr>

                <tr>
                    <th>No. Surat</th>
                    <td><?php echo $detail->no_suratmasuk ?></td>
                </tr>

                <tr>
                    <th>Tanggal Surat</th>
                    <td><?php echo $detail->tgl_suratmasuk ?></td>
                </tr>

                <tr>
                    <th>Prihal Surat Masuk</th>
                    <td><?php echo $detail->prihal_suratmasuk ?></td>
                </tr>

                <tr>
                    <th>Penanggung Jawab / Pengelola </th>
                    <td><?php echo $detail->penanggungjawab_suratmasuk ?></td>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $detail->keterangan_suratmasuk ?></td>
                </tr>
            </table>


            <a href="<?php echo base_url('suratmasuk/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>