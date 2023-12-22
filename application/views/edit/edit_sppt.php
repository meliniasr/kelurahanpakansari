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
      <h4><strong><u> Edit SPPT </u></strong></h4>
      <?php foreach ($sppt as $pt) { ?>

<form action="<?php echo base_url().'sppt/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_sppt" class="form-control" value="<?php echo $pt->id_sppt ?>">
    <input type="date" name="tgl_sppt" class="form-control" value="<?php echo $pt->tgl_sppt ?>">
  </div>

  <div class="form-group">
    <label>Nama</label> 
    <input type="text" name="nama_sppt" class="form-control" value="<?php echo $pt->nama_sppt ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_sppt" class="form-control" value="<?php echo $pt->tempat_lahir_sppt ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_sppt" class="form-control" value="<?php echo $pt->ttl_sppt ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_sppt" class="form-control" value="<?php echo $pt->jenis_kelamin_sppt ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

  <div class="form-group">
    <label>Bukti Kepemilikan</label>
    <input type="text" name="bukti_kepemilikan" class="form-control" value="<?php echo $pt->bukti_kepemilikan ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_sppt" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pt->alamat_sppt ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Lokasi Tanah</label>
    <input type="text" name="lokasitanah_sppt" class="form-control" value="<?php echo $pt->lokasitanah_sppt ?>">
  </div>

  <div class="form-group">
    <label>Luas Tanah & Bangunan </label>
    <input type="text" name="luas_tanah_sppt" class="form-control" value="<?php echo $pt->luas_tanah_sppt ?>">
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
