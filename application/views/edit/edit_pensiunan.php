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
      <h4><strong><u> Edit Pensiunan </u></strong></h4>
      <?php foreach ($pensiunan as $pen) { ?>

<form action="<?php echo base_url() . 'pensiunan/update'; ?>" method="post">

  <div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_penisun" class="form-control" value="<?php echo $pen->id_pensiun ?>">
    <input type="date" name="tgl_pensiun" class="form-control" value="<?php echo $pen->tgl_pensiun ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_pensiun" class="form-control" value="<?php echo $pen->nama_pensiun ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_pensiun" class="form-control" value="<?php echo $pen->tempat_lahir_pensiun ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_lahir_pensiun" class="form-control" value="<?php echo $pen->ttl_lahir_pensiun ?>">
  </div>

  <div class="form-group">
    <label>Pensiunan</label>
    <input type="text" name="pensiunan" class="form-control" value="<?php echo $pen->pensiunan ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_pensiun" class="form-control" value="<?php echo $pen->jenis_kelamin_pensiun ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label">Agama</label>
    <div class="col-lg-12">
      <select name="agama_pensiun" class="form-control" value="<?php echo $pen->agama_pensiun ?>">
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
    <textarea class="form-control" name="alamat_pensiun" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pen->alamat_pensiun ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Tujuan</label>
    <input type="text" name="tujuan_pensiun" class="form-control" value="<?php echo $pen->tujuan_pensiun ?>">
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_pensiun" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pen->keterangan_pensiun ?>"></textarea>
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
