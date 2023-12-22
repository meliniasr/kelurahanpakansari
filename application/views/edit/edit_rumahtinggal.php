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
      <h4><strong><u> Edit Rumah Tinggal </u></strong></h4>
      <?php foreach ($rumahtinggal as $rt) { ?>

<form action="<?php echo base_url() . 'rumahtinggal/update'; ?>" method="post">

  <div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_rt" class="form-control" value="<?php echo $rt->id_rt ?>">
    <input type="date" name="tgl_rt" class="form-control" value="<?php echo $rt->tgl_rt ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_rt" class="form-control" value="<?php echo $rt->nama_rt ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_rt" class="form-control" value="<?php echo $rt->tempat_lahir_rt ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="tgl_lahir_rt" class="form-control" value="<?php echo $rt->tgl_lahir_rt ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_rt" class="form-control" value="<?php echo $rt->pekerjaan_rt ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_rt" class="form-control" value="<?php echo $rt->jenis_kelamin_rt ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label">Agama</label>
    <div class="col-lg-12">
      <select name="agama_rt" class="form-control" value="<?php echo $rt->agama_rt ?>">
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
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_rt" id="exampleFormControlTextarea1" rows="3" value="<?php echo $rt->alamat_rt ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Di Perumahan</label>
    <input type="text" name="diperumahan_rt" class="form-control" value="<?php echo $rt->diperumahan_rt ?>">
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_rt" id="exampleFormControlTextarea1" rows="3" value="<?php echo $rt->keterangan_rt ?>"></textarea>
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
