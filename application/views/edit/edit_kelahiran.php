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
      <h4><strong><u> Edit Kelahiran  </u></strong></h4>
      <?php foreach ($kelahiran as $kl) { ?>

<form action="<?php echo base_url().'kelahiran/update'; ?>" method="post">

    <div class="form-group">
        <label>Tanggal</label>
        <input type="hidden" name="id_kelahiran" class="form-control" value="<?php echo $kl->id_kelahiran ?>">
        <input type="date" name="tgl_kelahiran" class="form-control"  value="<?php echo $kl->tgl_kelahiran ?>">
    </div>

  <div class="form-group">
    <label>Nama Anak</label>
    <input type="text" name="nama_anak_kelahiran" class="form-control" value="<?php echo $kl->nama_anak_kelahiran ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_kelahiran" class="form-control" value="<?php echo $kl->tempat_lahir_kelahiran?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_kelahiran" class="form-control" value="<?php echo $kl->ttl_kelahiran ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_kelahiran" class="form-control" value="<?php echo $kl->jenis_kelamin_kelahiran ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

<div class="form-group">
    <label>Nama Bapak</label>
    <input type="text" name="nama_bapak_kelahiran" class="form-control" value="<?php echo $kl->nama_bapak_kelahiran ?>">
  </div>


  <div class="form-group">
    <label>Nama Ibu</label>
    <input type="text" name="nama_ibu_kelahiran" class="form-control" value="<?php echo $kl->nama_ibu_kelahiran ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_kelahiran" id="exampleFormControlTextarea1" rows="3" value="<?php echo $kl->alamat_kelahiran ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_kelahiran" id="exampleFormControlTextarea1" rows="3" value="<?php echo $kl->keterangan_kelahiran ?>"></textarea>
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
