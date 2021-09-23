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
      <h4><strong><u> Edit Keterangan Ghoib </u></strong></h4>
      <?php foreach ($keteranganghoib as $kg) { ?>

<form action="<?php echo base_url().'keteranganghoib/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_ghoib" class="form-control" value="<?php echo $kg->id_ghoib ?>">
    <input type="date" name="tgl_ghoib" class="form-control" value="<?php echo $kg->tgl_ghoib ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_ghoib" class="form-control" value="<?php echo $kg->nama_ghoib ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_ghoib" class="form-control" value="<?php echo $kg->tempat_lahir_ghoib ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_lahir_ghoib" class="form-control" value="<?php echo $kg->ttl_lahir_ghoib ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_ghoib" class="form-control" value="<?php echo $kg->pekerjaan_ghoib ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_ghoib" class="form-control" value="<?php echo $kg->jenis_kelamin_ghoib ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

  <div class="form-group">
  <label class="control-label">Agama</label>
   <div class="col-lg-12">
   <select name="agama_ghoib" class="form-control" value="<?php echo $kg->agama_ghoib ?>">
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
    <textarea class="form-control" name="alamat_ghoib" id="exampleFormControlTextarea1" rows="3" value="<?php echo $kg->alamat_ghoib ?>"></textarea>
  </div>

  
  <div class="form-group">
    <label>No. Surat Nikah</label>
    <input type="text" name="no_suratnikah_ghoib" class="form-control" value="<?php echo $kg->no_suratnikah_ghoib ?>">
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_ghoib" id="exampleFormControlTextarea1" rows="3" value="<?php echo $kg->keterangan_ghoib ?>"></textarea>
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
