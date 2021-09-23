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
      <h4><strong><u> Edit SKL</u></strong></h4>
      <?php foreach ($skl as $skl) { ?>

<form action="<?php echo base_url() . 'skl/update'; ?>" method="post">
  <div class="form-group">
    <label class="control-label">Bulan Register</label>
    <input type="hidden" name="id_skl" class="form-control" value="<?php echo $skl->id_skl ?>">
    <div class="col-lg-12">
      <select name="bulan_register_skl" class="form-control" value="<?php echo $skl->bulan_register_skl ?>">
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
      <select name="tahun_register_skl" class="form-control" value="<?php echo $skl->tahun_register_skl ?>">
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
    <input type="text" name="rt_skl" class="form-control" value="<?php echo $skl->rt_skl ?>">
  </div>

  <div class="form-group">
    <label>Tgl Surat Pengantar</label>
    <input type="text" name="tgl_suratpengantar_skl" class="form-control" value="<?php echo $skl->tgl_suratpengantar_skl ?>">
  </div>

  <div class="form-group">
    <label>KK</label>
    <input type="text" name="kk_skl" class="form-control" value="<?php echo $skl->kk_skl ?>">
  </div>

  <div class="form-group">
    <label>Surat RS</label>
    <input type="text" name="surat_rumahsakit" class="form-control" value="<?php echo $skl->surat_rumahsakit ?>">
  </div>

  <div class="form-group">
    <label>No. Akta Nikah</label>
    <input type="text" name="no_aktanikah" class="form-control" value="<?php echo $skl->no_aktanikah ?>">
  </div>

  <div class="form-group">
    <label>Tgl Dikeluarkannya Akta Nikah</label>
    <input type="text" name="tgl_dikeluarkan_akta" class="form-control" value="<?php echo $skl->tgl_dikeluarkan_akta ?>">
  </div>

  <div class="form-group">
    <label>Tgl Dikeluarkannya Surat Kelahiran</label>
    <input type="text" name="tgl_dikeluarkan_skl" class="form-control" value="<?php echo $skl->tgl_dikeluarkan_skl ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin Anak</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_anak" class="form-control" value="<?php echo $skl->jenis_kelamin_anak ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Nama Anak (HURUF KAPITAL SEMUA)</label>
    <input type="text" name="nama_anak" class="form-control" value="<?php echo $skl->nama_anak ?>">
  </div>

  <div class="form-group">
    <label>Anak Ke</label>
    <input type="text" name="anak_ke" class="form-control" value="<?php echo $skl->anak_ke ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir Anak</label>
    <input type="text" name="tempat_lahir_anak_skl" class="form-control" value="<?php echo $skl->tempat_lahir_anak_skl ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Hari Lahir Anak</label>
    <div class="col-lg-12">
      <select name="hari_lahir_anak_skl" class="form-control" value="<?php echo $skl->hari_lahir_anak_skl ?>">
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jum'at">Jum'at</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Tgl Lahir Anak (co: 14-12-1999)</label>
    <input type="text" name="tgl_lahir_anak_skl" class="form-control" value="<?php echo $skl->tgl_lahir_anak_skl ?>">
  </div>

  <div class="form-group">
    <label>Jam Lahir Anak (co: 09:40)</label>
    <input type="text" name="jam_lahir_anak_skl" class="form-control" value="<?php echo $skl->jam_lahir_anak_skl ?>">
  </div>

  <div class="form-group">
    <label>Nama Ayah SKL</label>
    <input type="text" name="nama_ayah_skl" class="form-control" value="<?php echo $skl->nama_ayah_skl ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin Ayah</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_ayah_skl" class="form-control" value="<?php echo $skl->jenis_kelamin_ayah_skl ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Tempat Tgl Lahir Ayah</label>
    <input type="text" name="ttl_ayah_skl" class="form-control" value="<?php echo $skl->ttl_ayah_skl ?>">
  </div>

  <div class="form-group">
    <label>Bangsa Ayah</label>
    <input type="text" name="bangsa_ayah_skl" class="form-control" value="<?php echo $skl->bangsa_ayah_skl ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Agama Ayah</label>
    <div class="col-lg-12">
      <select name="agama_ayah_skl" class="form-control" value="<?php echo $skl->agama_ayah_skl ?>">
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
    <label>NIK Ayah</label>
    <input type="text" name="nik_ayah_skl" class="form-control" value="<?php echo $skl->nik_ayah_skl ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan Ayah</label>
    <input type="text" name="pekerjaan_ayah_skl" class="form-control" value="<?php echo $skl->pekerjaan_ayah_skl ?>">
  </div>

  <div class="form-group">
    <label>Nama Ibu SKL</label>
    <input type="text" name="nama_ibu_skl" class="form-control" value="<?php echo $skl->nama_ibu_skl ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin Ibu</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_ibu_skl" class="form-control" value="<?php echo $skl->jenis_kelamin_ibu_skl ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Tempat Tgl Lahir Ibu</label>
    <input type="text" name="ttl_ibu_skl" class="form-control" value="<?php echo $skl->ttl_ibu_skl ?>">
  </div>

  <div class="form-group">
    <label>Bangsa Ibu</label>
    <input type="text" name="bangsa_ibu_skl" class="form-control" value="<?php echo $skl->bangsa_ibu_skl ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Agama Ibu</label>
    <div class="col-lg-12">
      <select name="agama_ibu" class="form-control" value="<?php echo $skl->agama_ibu ?>">
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
    <label>NIK Ibu</label>
    <input type="text" name="nik_ibu_skl" class="form-control" value="<?php echo $skl->nik_ibu_skl ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan Ibu</label>
    <input type="text" name="pekerjaan_ibu_skl" class="form-control" value="<?php echo $skl->pekerjaan_ibu_skl ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_skl" id="exampleFormControlTextarea1" rows="3" value="<?php echo $skl->alamat_skl ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Tgl Dibuat Surat (co: 24 November 2021)</label>
    <input type="text" name="tgl_dibuat_suratskl" class="form-control" value="<?php echo $skl->tgl_dibuat_suratskl ?>">
  </div>

  <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php } ?>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<!-- /.card -->
<!-- general form elements disabled -->
</div>
</div>
</div>
</div>
