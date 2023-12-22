<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Surat Keterangan Tidak Mampu (SKTM)</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Surat Keterangan Tidak Mampu (SKTM)</li>
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
            <th>Tempat Tgl Lahir</th>
            <th>No. NIK</th>
            <th>No. KK</th>
            <th>Nama Anak</th>
            <th>Tgl Buat Surat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($blangkosktm as $bsk) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $bsk->nama_blangkosktm ?></td>
              <td><?php echo $bsk->ttl_blangkosktm ?></td>
              <td><?php echo $bsk->nik_blangkosktm ?></td>
              <td><?php echo $bsk->kk_blangkosktm ?></td>
              <td><?php echo $bsk->nama_anak_blangkosktm ?></td>
              <td><?php echo $bsk->tgl_dibuat_blangkosktm ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('blangkosktm/detail/' . $bsk->id_blangkosktm), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkosktm/pdf/' . $bsk->id_blangkosktm), '<i class="far fa-fw fa-file-pdf"></i>', array('title' => 'pdf', 'class' => 'btn btn-danger btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkosktm/edit/' . $bsk->id_blangkosktm),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkosktm/hapus/' . $bsk->id_blangkosktm), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT SKU</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'blangkosktm/tambah_aksi'; ?>">
          <div class="form-group">
            <label class="control-label">Bulan Register</label>
            <div class="col-lg-12">
              <select name="bulan_register_blangkosktm" class="form-control">
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
              <select name="tahun_register_blangkosktm" class="form-control">
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
            <label>RT / RW (co: 004/007)</label>
            <input type="text" name="rt_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>Tgl Surat Pengantar RT (co: 14 – 06 - 2021)</label>
            <input type="text" name="tgl_suratpengantar_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Pemohon (HURUF KAPITAL SEMUA)</label>
            <input type="text" name="nama_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin Pemohon</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_blangkosktm" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir Pemohon (co: Medan, 27 -12- 1967)</label>
            <input type="text" name="ttl_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>Bangsa</label>
            <input type="text" name="bangsa_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Agama</label>
            <div class="col-lg-12">
              <select name="agama_blangkosktm" class="form-control">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Kong Hucu">Kong Hucu</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>NIK Pemohon</label>
            <input type="text" name="nik_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>KK </label>
            <input type="text" name="kk_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Status Perkawinan</label>
            <div class="col-lg-12">
              <select name="statuskawin_blangkosktm" class="form-control">
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Mati</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_blangkosktm" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Nama Anak (HURUF KAPITAL SEMUA)</label>
            <input type="text" name="nama_anak_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Sekolah (HURUF KAPITAL SEMUA)</label>
            <input type="text" name="nama_sekolah_blangkosktm" class="form-control">
          </div>

          <div class="form-group">
            <label>Tgl Buat Suratnya (co: 16 Agustus 2021)</label>
            <input type="text" name="tgl_dibuat_blangkosktm" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>