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
      <h4><strong><u> Edit Usaha  </u></strong></h4>
      <?php foreach ($usaha as $us) { ?>

<form action="<?php echo base_url().'usaha/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_usaha" class="form-control" value="<?php echo $us->id_usaha ?>">
    <input type="date" name="tgl_usaha" class="form-control" value="<?php echo $us->tgl_usaha ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_usaha" class="form-control" value="<?php echo $us->nama_usaha ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_usaha" class="form-control" value="<?php echo $us->tempat_lahir_usaha ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_usaha" class="form-control" value="<?php echo $us->ttl_usaha ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_usaha" class="form-control" value="<?php echo $us->pekerjaan_usaha ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_usaha" id="exampleFormControlTextarea1" rows="3" value="<?php echo $us->alamat_usaha ?>"></textarea>
  </div>

  <div class="form-group">
    <label>NO. NIK KTP</label>
    <input type="text" name="no_ktp_usaha" class="form-control" value="<?php echo $us->no_ktp_usaha ?>">
  </div>

  <div class="form-group">
    <label>Jenis Usaha</label>
    <input type="text" name="jenis_usaha" class="form-control" value="<?php echo $us->jenis_usaha ?>">
  </div>

  <div class="form-group">
    <label>Status Kepemilikan Tempat</label>
    <input type="text" name="statuskepemilikan_usaha" class="form-control" value="<?php echo $us->statuskepemilikan_usaha ?>">
  </div>

  <div class="form-group">
    <label> Nama Usaha</label>
    <input type="text" name="bank_usaha" class="form-control" value="<?php echo $us->bank_usaha ?>">
  </div>

  <div class="form-group">
    <label> Lokasi</label>
    <input type="text" name="lokasi_usaha" class="form-control" value="<?php echo $us->lokasi_usaha ?>">
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_usaha" id="exampleFormControlTextarea1" rows="3" value="<?php echo $us->keterangan_usaha ?>"></textarea>
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
