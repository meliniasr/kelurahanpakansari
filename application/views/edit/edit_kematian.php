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
      <h4><strong><u> Edit Kematian </u></strong></h4>
      <?php foreach ($kematian as $km) { ?>

<form action="<?php echo base_url().'kematian/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_kematian" class="form-control" value="<?php echo $km->id_kematian ?>">
    <input type="date" name="tgl_keterangankematian" class="form-control" value="<?php echo $km->tgl_keterangankematian ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_kematian" class="form-control" value="<?php echo $km->nama_kematian ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_kematian" class="form-control" value="<?php echo $km->tempat_lahir_kematian ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_kematian" class="form-control" value="<?php echo $km->ttl_kematian ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_kematian" class="form-control" value="<?php echo $km->jenis_kelamin_kematian ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

<div class="form-group">
  <label class="control-label">Agama</label>
   <div class="col-lg-12">
   <select name="agama_kematian" class="form-control" value="<?php echo $km->agama_kematian ?>">
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
    <textarea class="form-control" name="alamat_kematian" id="exampleFormControlTextarea1" rows="3" value="<?php echo $km->alamat_kematian ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_kematian" id="exampleFormControlTextarea1" rows="3" value="<?php echo $km->keterangan_kematian ?>"></textarea>
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
