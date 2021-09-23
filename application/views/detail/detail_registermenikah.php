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
            <h4><strong> Detail Register Menikah</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_menikah?></td>
            </tr>

            <tr>
                <th>Nama Suami</th>
                <td><?php echo $detail->nama_suami_menikah?></td>
            </tr>

            <tr>
                <th>Tempat Lahir Suami</th>
                <td><?php echo $detail->tempat_lahir_suami?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir Suami</th>
                <td><?php echo $detail->tgl_lahir_suami?></td>
            </tr>

            <tr>
                <th>Alamat Suami</th>
                <td><?php echo $detail->alamat_suami?></td>
            </tr>

            <tr>
                <th>Status Suami</th>
                <td><?php echo $detail->status_suami?></td>
            </tr>

            <tr>
                <th>Pekerjaan Suami</th>
                <td><?php echo $detail->pekerjaan_menikah?></td>
            </tr>

            <tr>
                <th>Nama Istri</th>
                <td><?php echo $detail->nama_istri_menikah?></td>
            </tr>

            <tr>
                <th>Tempat Lahir Istri</th>
                <td><?php echo $detail->tempat_lahir_istri?></td>
            </tr>

            <tr>
                <th>Tanggal Lahir Istri</th>
                <td><?php echo $detail->tgl_lahir_istri?></td>
            </tr>

            <tr>
                <th>Alamat Istri</th>
                <td><?php echo $detail->alamat_istri?></td>
            </tr>

            <tr>
                <th>Status Istri</th>
                <td><?php echo $detail->status_istri?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_menikah?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('registermenikah/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>


