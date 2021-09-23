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
            <h4><strong> Detail Blangko SKL</strong></h4>

            <table class="table table-striped table-bordered">
            <tr>
              <th>Bulan</th>
              <td><?php echo $detail->bulan_register_skl ?></td>
            </tr>

            <tr>
              <th>Tahun</th>
              <td><?php echo $detail->tahun_register_skl?></td>
            </tr>

            <tr>
              <th>RT/RW</th>
              <td><?php echo $detail->rt_skl ?></td>
            </tr>

            <tr>
              <th>Tgl Surat Pengantar</th>
              <td><?php echo $detail->tgl_suratpengantar_skl ?></td>
            </tr>

            <tr>
              <th>No. KK</th>
              <td><?php echo $detail->kk_skl?></td>
            </tr>

            <tr>
              <th>Surat Rumah Sakit</th>
              <td><?php echo $detail->surat_rumahsakit ?></td>
            </tr>
            <tr>
              <th>No. Akta Nikah</th>
              <td><?php echo $detail->no_aktanikah?></td>
            </tr>

            <tr>
              <th>Tgl Dikeluarkan Akta</th>
              <td><?php echo $detail->tgl_dikeluarkan_akta ?></td>
            </tr>

            <tr>
              <th>Tgl Dikeluarkan SKL</th>
              <td><?php echo $detail->tgl_dikeluarkan_skl?></td>
            </tr>

            <tr>
              <th>Jenis Kelamin</th>
              <td><?php echo $detail->jenis_kelamin_anak ?></td>
            </tr>

            <tr>
              <th>Nama Anak</th>
              <td><?php echo $detail->nama_anak ?></td>
            </tr>

            <tr>
              <th>Anak Ke</th>
              <td><?php echo $detail->anak_ke ?></td>
            </tr>

            <tr>
              <th>Tempat Lahir</th>
              <td><?php echo $detail->tempat_lahir_anak_skl?></td>
            </tr>

            <tr>
              <th>Hari Lahir Anak</th>
              <td><?php echo $detail->hari_lahir_anak_skl ?></td>
            </tr>
            

            <tr>
              <th>Tgl Lahir Anak</th>
              <td><?php echo $detail->tgl_lahir_anak_skl?></td>
            </tr>

            <tr>
              <th>Jam Lahir Anak</th>
              <td><?php echo $detail->jam_lahir_anak_skl?></td>
            </tr>

            <tr>
              <th>Nama Ayah</th>
              <td><?php echo $detail->nama_ayah_skl?></td>
            </tr>

            <tr>
              <th>Jenis Kelamin Ayah</th>
              <td><?php echo $detail->jenis_kelamin_ayah_skl?></td>
            </tr>

            <tr>
              <th>Tempat Tgl Lahir Ayah</th>
              <td><?php echo $detail->ttl_ayah_skl?></td>
            </tr>

            <tr>
              <th>Bangsa Ayah</th>
              <td><?php echo $detail->bangsa_ayah_skl?></td>
            </tr>
            <tr>
              <th>Agama Ayah</th>
              <td><?php echo $detail->agama_ayah_skl?></td>
            </tr>

            <tr>
              <th>No. NIK Ayah</th>
              <td><?php echo $detail->nik_ayah_skl ?></td>
            </tr>

            <tr>
              <th>Pekerjaan Ayah</th>
              <td><?php echo $detail->pekerjaan_ayah_skl?></td>
            </tr>

            <tr>
              <th>Nama Ibu</th>
              <td><?php echo $detail->nama_ibu_skl ?></td>
            </tr>

            <tr>
              <th>Jenis Kelamin Ibu</th>
              <td><?php echo $detail->jenis_kelamin_ibu_skl?></td>
            </tr>

            <tr>
              <th>Tempat Tgl Lahir Ibu</th>
              <td><?php echo $detail->ttl_ibu_skl?></td>
            </tr>

            <tr>
              <th>Bangsa Ibu</th>
              <td><?php echo $detail->bangsa_ibu_skl?></td>
            </tr>
            <tr>
              <th>Agama Ibu</th>
              <td><?php echo $detail->agama_ibu?></td>
            </tr>

            <tr>
              <th>No. NIK Ibu</th>
              <td><?php echo $detail->nik_ibu_skl ?></td>
            </tr>

            <tr>
              <th>Pekerjaan Ibu</th>
              <td><?php echo $detail->pekerjaan_ibu_skl?></td>
            </tr>

            <tr>
              <th>Alamat</th>
              <td><?php echo $detail->alamat_skl ?></td>
            </tr>

            <tr>
              <th>Tgl Dibuat</th>
              <td><?php echo $detail->tgl_dibuat_suratskl?></td>
            </tr>
      
            </table>

            <a href="<?php echo base_url('skl/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>