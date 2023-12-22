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
            <h4><strong> Detail Blangko SKU </strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
              <th>Bulan</th>
              <td><?php echo $detail->bulan_register_blangkosku ?></td>
            </tr>

            <tr>
              <th>Tahun</th>
              <td><?php echo $detail->tahun_register_blangkosku ?></td>
            </tr>

            <tr>
              <th>Nama</th>
              <td><?php echo $detail->nama_blangkosku ?></td>
            </tr>

            <tr>
              <th>Jenis Kelamin</th>
              <td><?php echo $detail->jenis_kelamin_blangkosku ?></td>
            </tr>

            <tr>
              <th>Tempat Tgl Lahir</th>
              <td><?php echo $detail->ttl_blangkosku ?></td>
            </tr>

            <tr>
              <th>Bangsa </th>
              <td><?php echo $detail->bangsa_blangkosku ?></td>
            </tr>

            <tr>
              <th>Agama</th>
              <td><?php echo $detail->agama_blangkosku ?></td>
            </tr>

            <tr>
              <th>No. NIK </th>
              <td><?php echo $detail->nik_blangkosku ?></td>
            </tr>

            <tr>
              <th>Pekerjaan</th>
              <td><?php echo $detail->pekerjaan_blangkosku ?></td>
            </tr>

            <tr>
              <th>Alamat</th>
              <td><?php echo $detail->alamat_blangkosku ?></td>
            </tr>

            <tr>
              <th>RT/RW</th>
              <td><?php echo $detail->rt_blangkosku ?></td>
            </tr>

            <tr>
              <th>Tgl Buat Surat</th>
              <td><?php echo $detail->tgl_dibuat_blangkosku ?></td>
            </tr>

            <tr>
              <th>Usaha </th>
              <td><?php echo $detail->usaha_apa_blangkosku ?></td>
            </tr>

            <tr>
              <th>Tujuan</th>
              <td><?php echo $detail->tujuan_keperluan_blangkosku ?></td>
            </tr>
      
            </table>

            <a href="<?php echo base_url('blangkosku/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>