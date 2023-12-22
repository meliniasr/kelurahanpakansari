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
            <h4><strong> Detail Blangko Belum Pernah Menikah</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
              <th>Bulan</th>
              <td><?php echo $detail->bulan_register_blangkobn ?></td>
            </tr>

            <tr>
              <th>Tahun</th>
              <td><?php echo $detail->tahun_register_blangkobn ?></td>
            </tr>

            <tr>
              <th>RT/RW</th>
              <td><?php echo $detail->rt_blangkobn ?></td>
            </tr>

            <tr>
              <th>Tgl Surat Pengantar</th>
              <td><?php echo $detail->tgl_suratpengantar_bn ?></td>
            </tr>

            <tr>
              <th>Nama</th>
              <td><?php echo $detail->nama_blangkobn ?></td>
            </tr>

            <tr>
              <th>Jenis Kelamin </th>
              <td><?php echo $detail->jenis_kelamin_blangkobn?></td>
            </tr>

            <tr>
              <th>Tempat Tgl Lahir</th>
              <td><?php echo $detail->ttl_blangkobn ?></td>
            </tr>

            <tr>
              <th>Bangsa</th>
              <td><?php echo $detail->bangsa_blangkobn ?></td>
            </tr>

            <tr>
              <th>Agama</th>
              <td><?php echo $detail->agama_blangkobn?></td>
            </tr>

            <tr>
              <th>Status</th>
              <td><?php echo $detail->statusperkawinan_blangkobn?></td>
            </tr>

            <tr>
              <th>No. NIK</th>
              <td><?php echo $detail->nik_blangkobn ?></td>
            </tr>

            <tr>
              <th>Pekerjaan</th>
              <td><?php echo $detail->pekerjaan_blangkobn ?></td>
            </tr>

            <tr>
              <th>Alamat </th>
              <td><?php echo $detail->alamat_blangkobn ?></td>
            </tr>

            <tr>
              <th>Dipergunakan Untuk</th>
              <td><?php echo $detail->dipergunakan_untuk_blangkobn ?></td>
            </tr>

            <tr>
              <th>Tgl Dibuat</th>
              <td><?php echo $detail->tgl_dibuat_blangkobn ?></td>
            </tr>
            </table>

            <a href="<?php echo base_url('balngkobn/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>