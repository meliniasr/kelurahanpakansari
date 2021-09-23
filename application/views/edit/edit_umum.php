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
      <h4><strong><u> Edit Umum </u></strong></h4>
      <?php foreach ($umum as $um) { ?>

<form action="<?php echo base_url().'umum/update'; ?>" method="post">

    <div class="form-group">
        <label>Tanggal</label>
        <input type="hidden" name="id_umum" class="form-control" value="<?php echo $um->id_umum ?>">
        <input type="date" name="tgl_umum" class="form-control"  value="<?php echo $um->tgl_umum ?>">
    </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_umum" class="form-control" value="<?php echo $um->nama_umum ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_umum" class="form-control" value="<?php echo $um->tempat_lahir_umum ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_lahir_umum" class="form-control" value="<?php echo $um->ttl_lahir_umum ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_umum" class="form-control" value="<?php echo $um->pekerjaan_umum ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_umum" class="form-control" value="<?php echo $um->pekerjaan_umum ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

<div class="form-group">
  <label class="control-label">Agama</label>
   <div class="col-lg-12">
   <select name="agama_umum" class="form-control" value="<?php echo $um->agama_umum ?>">
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
    <label>Tujuan</label>
    <input type="text" name="tujuan_umum" class="form-control" value="<?php echo $um->tujuan_umum ?>">
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_umum" id="exampleFormControlTextarea1" rows="3" value="<?php echo $um->keterangan_umum ?>"></textarea>
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


