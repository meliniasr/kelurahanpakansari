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
      <h4><strong><u> Edit SKCK </u></strong></h4>
      <?php foreach ($skck as $s) { ?>

<form action="<?php echo base_url() . 'skck/update'; ?>" method="post">

  <div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_skck" class="form-control" value="<?php echo $s->id_skck ?>">
    <input type="date" name="tgl_skck" class="form-control" value="<?php echo $s->tgl_skck ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_skck" class="form-control" value="<?php echo $s->nama_skck ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_skck" class="form-control" value="<?php echo $s->tempat_lahir_skck ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_skck" class="form-control" value="<?php echo $s->ttl_skck ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_skck" class="form-control" value="<?php echo $s->jenis_kelamin_skck ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label">Status Perkawinan</label>
    <div class="col-lg-12">
      <select name="status_perkawinan_skck" class="form-control" value="<?php echo $s->status_perkawinan_skck ?>">
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Cerai Hidup">Cerai Hidup</option>
        <option value="Cerai Mati">Cerai Mati</option>
      </select>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label">Agama</label>
    <div class="col-lg-12">
      <select name="agama_skck" class="form-control" value="<?php echo $s->agama_skck ?>">
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
    <label class="control-label">Pendidikan Terakhir</label>
    <div class="col-lg-12">
      <select name="pendidikan_terakhir_skck" class="form-control" value="<?php echo $s->pendidikan_terakhir_skck ?>">
        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
        <option value="Diploma I/II">Diploma I/II</option>
        <option value="Akademi/Diploma III/Sarjana Muda">Akademi/Diploma III/Sarjana Muda</option>
        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
        <option value="Strata II">Strata II</option>
        <option value="Strata III">Strata III</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_skck" id="exampleFormControlTextarea1" rows="3" value="<?php echo $s->alamat_skck ?>"></textarea>
  </div>

  <div class="form-group">
    <label>No. NIK KTP</label>
    <input type="text" name="nik_skck" class="form-control" value="<?php echo $s->nik_skck ?>">
  </div>

  <div class="form-group">
    <label>Untuk Keperluan </label>
    <input type="text" name="tujuan_skck" class="form-control" value="<?php echo $s->tujuan_skck ?>">
  </div>

  <div class="form-group">
    <label>Keterangan </label>
    <textarea class="form-control" name="keterangan_skck" id="exampleFormControlTextarea1" rows="3" value="<?php echo $s->keterangan_skck ?>"></textarea>
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
