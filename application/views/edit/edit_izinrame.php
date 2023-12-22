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
      <h4><strong><u> Edit Izinrame  </u></strong></h4>
      <?php foreach ($izinrame as $ir) { ?>

<form action="<?php echo base_url().'izinrame/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_izinrame" class="form-control" value="<?php echo $ir->id_izinrame ?>">
    <input type="date" name="tgl_izinrame" class="form-control" value="<?php echo $ir->tgl_izinrame ?>">
  </div>

  <div class="form-group">
    <label>Nama Pemohon</label>
    <input type="text" name="nama_pemohon_izinrame" class="form-control" value="<?php echo $ir->nama_pemohon_izinrame ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_izinrame" class="form-control" value="<?php echo $ir->tempat_lahir_izinrame ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_izinrame" class="form-control" value="<?php echo $ir->ttl_izinrame ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_izinrame" class="form-control" value="<?php echo $ir->jenis_kelamin_izinrame ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

  <div class="form-group">
    <label>No. NIK KTP</label>
    <input type="text" name="nik_izinrame" class="form-control" value="<?php echo $ir->nik_izinrame ?>">
  </div>


  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_izinrame" class="form-control" value="<?php echo $ir->pekerjaan_izinrame ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_izinrame" id="exampleFormControlTextarea1" rows="3" value="<?php echo $ir->alamat_izinrame ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Waktu Acara</label>
    <input type="date" name="waktu_izinrame" class="form-control" value="<?php echo $ir->waktu_izinrame ?>">
  </div>

  <div class="form-group">
    <label>Acara</label>
    <input type="text" name="acara_izinrame" class="form-control" value="<?php echo $ir->acara_izinrame ?>">
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


