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
            <h4><strong> Detail Blangko Kematian</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
              <th>Bulan</th>
              <td><?php echo $detail->bulan_register_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Tahun</th>
              <td><?php echo $detail->tahun_register_blangkokematian ?></td>
            </tr>

            <tr>
              <th>RT/RW</th>
              <td><?php echo $detail->rt_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Tgl Surat Pengantar</th>
              <td><?php echo $detail->tgl_suratpengantar_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Tgl Dibuat</th>
              <td><?php echo $detail->tgl_dibuat_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Nama Pemohon</th>
              <td><?php echo $detail->nama_pemohon_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Nama Kepala Keluarga</th>
              <td><?php echo $detail->nama_kepalakeluarga_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Jenis Kelamin </th>
              <td><?php echo $detail->jenis_kelamin_blangkokematian?></td>
            </tr>

            <tr>
              <th>Tempat Tgl Lahir</th>
              <td><?php echo $detail->ttl_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Bangsa</th>
              <td><?php echo $detail->bangsa_blangkokematian?></td>
            </tr>

            <tr>
              <th>Agama</th>
            <td><?php echo $detail->agama_blangkokematian?></td>
            </tr>

            <tr>
              <th>No. NIK</th>
              <td><?php echo $detail->nik_blangkokematian ?></td>
            </tr>

            <tr>
              <th>No. KK </th>
              <td><?php echo $detail->kk_blangkokematian ?></td>
            </tr>

            <tr>
              <th>Pekerjaan</th>
              <td><?php echo $detail->pekerjaan_blangkokematian?></td>
            </tr>

            <tr>
              <th>Status</th>
            <td><?php echo $detail->statuskawin_blangkokematian?></td>
            </tr>

            <tr>
              <th>Alamat</th>
              <td><?php echo $detail->alamat_blangkokematian?></td>
            </tr>

            <tr>
              <th>Status Hubungan Keluarga </th>
              <td><?php echo $detail->statushubungankeluarga?></td>
            </tr>

            <tr>
              <th>Nama Orang Meninggal</th>
              <td><?php echo $detail->nama_si_meninggal?></td>
            </tr>

            <tr>
              <th>Tgl Meninggal</th>
            <td><?php echo $detail->tgl_kematian_blangkokematian?></td>
            </tr>

            <tr>
              <th>Dikarenakan</th>
              <td><?php echo $detail->dikarenakan_blangkokematian?></td>
            </tr>

            <tr>
              <th>Meninggal Di </th>
              <td><?php echo $detail->meninggal_di_blangkokematian?></td>
            </tr>

            <tr>
              <th>Tujuan</th>
              <td><?php echo $detail->tujuan_untuk_blangkokematian?></td>
            </tr>
      
            </table>

            <a href="<?php echo base_url('blangkokematian/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>