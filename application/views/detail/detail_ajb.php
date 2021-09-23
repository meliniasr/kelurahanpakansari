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
            <h4><strong> Detail AJB & Sertifikat</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail->tgl_ajb?></td>
            </tr>

            <tr>
                <th>Nama Penjual</th>
                <td><?php echo $detail->nama_penjual_ajb?></td>
            </tr>

            <tr>
                <th>Kepemilikan</th>
                <td><?php echo $detail->kepemilikan_ajb?></td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat_ajb?></td>
            </tr>

            <tr>
                <th>Nama Pembeli</th>
                <td><?php echo $detail->nama_pembeli_ajb?></td>
            </tr>

            <tr>
                <th>Letter C Atas Nama</th>
                <td><?php echo $detail->nama_letter_ajb?></td>
            </tr>

            <tr>
                <th>No. SPPT</th>
                <td><?php echo $detail->no_sppt_ajb?></td>
            </tr>

            <tr>
                <th>Luas Tanah</th>
                <td><?php echo $detail->luastanah_ajb?></td>
            </tr>

            <tr>
                <th>No. Sertifikat</th>
                <td><?php echo $detail->no_sertifikat_ajb?></td>
            </tr>

            <tr>
                <th>Lokasi Tanah</th>
                <td><?php echo $detail->lokasitanah_ajb?></td>
            </tr>

            <tr>
                <th>Keterangan</th>
                <td><?php echo $detail->keterangan_ajb?></td>
            </tr>
            </table>

            <a href="<?php echo base_url('ajb/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>


