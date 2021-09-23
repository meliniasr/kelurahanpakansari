<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Surat Keterangan Catatan Kepolisian (SKCK)</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Surat Keterangan Catatan Kepolisian (SKCK)</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <table id="zero_config" class="table table-striped table-bordered">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nama Kepala Keluarga</th>
            <th>Tempat Tgl Lahir</th>
            <th>No. NIK</th>
            <th>No. KK</th>
            <th>Tujuan</th>
            <th>Tgl Buat Surat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($blangkoskck as $skck) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $skck->nama_blangkoskck ?></td>
              <td><?php echo $skck->nama_kepalakeluarga_blangkoskck ?></td>
              <td><?php echo $skck->ttl_blangkoskck ?></td>
              <td><?php echo $skck->nik_blangkoskck ?></td>
              <td><?php echo $skck->kk_blangkoskck ?></td>
              <td><?php echo $skck->tujuan_untuk_blangkoskck ?></td>
              <td><?php echo $skck->tgl_dibuat_blangkoskck ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('blangkoskck/detail/' . $skck->id_blangkoskck), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkoskck/pdf/' . $skck->id_blangkoskck), '<i class="far fa-fw fa-file-pdf"></i>', array('title' => 'pdf', 'class' => 'btn btn-danger btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkoskck/edit/' . $skck->id_blangkoskck),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkoskck/hapus/' . $skck->id_blangkoskck), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
                ?>
                </a>
              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT SKCK</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'blangkoskck/tambah_aksi'; ?>">
          <div class="form-group">
            <label class="control-label">Bulan Register</label>
            <div class="col-lg-12">
              <select name="bulan_register_blangkoskck" class="form-control">
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
                <option value="VII">VII</option>
                <option value="VIII">VIII</option>
                <option value="IX">IX</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Tahun Register</label>
            <div class="col-lg-12">
              <select name="tahun_register_blangkoskck" class="form-control">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>RT / RW (co: 003/007)</label>
            <input type="text" name="rt_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>No. Surat Pengantar</label>
            <input type="text" name="nomor_suratpengantar_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Kepala Keluarga</label>
            <input type="text" name="nama_kepalakeluarga_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin Pemohon</label>
            <div class="form-check">
              <input name="jenis_kelamin_blangkoskck" class="form-check-input" type="checkbox" value="Laki-Laki" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Laki-Laki
              </label>
            </div>
            <div class="form-check" style="margin-top: -24px; margin-left:200px;">
              <input name="jenis_kelamin_blangkoskck" class="form-check-input" type="checkbox" value="Perempuan" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Perempuan
              </label>
            </div>
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir</label>
            <input type="text" name="ttl_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>Bangsa</label>
            <input type="text" name="bangsa_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Agama</label>
            <div class="form-check">
              <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Islam" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Islam
              </label>
            </div>
            <div class="form-check" style="margin-top: -24px; margin-left:200px;">
              <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Kristen" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Kristen
              </label>
            </div>
            <div class="form-check">
              <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Khatolik" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Khatolik
              </label>
            </div>
            <div class="form-check" style="margin-top: -24px; margin-left:200px;">
              <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Hindu" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Hindu
              </label>
            </div>
            <div class="form-check">
              <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Budha" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Budha
              </label>
            </div>
            <div class="form-check" style="margin-top: -24px; margin-left:200px;">
              <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Kong Hucu" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Kong Hucu
              </label>
            </div>
          </div>

          <div class="form-group">
            <label>NIK KTP</label>
            <input type="text" name="nik_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>KK</label>
            <input type="text" name="kk_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Status Perkawinan</label>
            <div class="form-check" style="margin-top: -24px; margin-left:200px;">
              <input name="statuskawin_blangkoskck" class="form-check-input" type="checkbox" value="Belum Kawin" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Belum Kawin
              </label>
            </div>
            <div class="form-check">
              <input name="statuskawin_blangkoskck" class="form-check-input" type="checkbox" value="Kawin" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Kawin
              </label>
            </div>
            <div class="form-check">
              <input name="statuskawin_blangkoskck" class="form-check-input" type="checkbox" value="Cerai Hidup" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Duda / Janda
              </label>
            </div>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_blangkoskck" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Tujuan Untuk</label>
            <input type="text" name="tujuan_untuk_blangkoskck" class="form-control">
          </div>

          <div class="form-group">
            <label>Tgl Dibuat Surat</label>
            <input type="text" name="tgl_dibuat_blangkoskck" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>