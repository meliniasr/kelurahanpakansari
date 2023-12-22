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
      <h4><strong><u> Edit Haji </u></strong></h4>
      <?php foreach ($pernyataanhaji as $ph) { ?>

<form action="<?php echo base_url().'pernyataanhaji/update'; ?>" method="post">


<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_haji" class="form-control" value="<?php echo $ph->id_haji ?>">
    <input type="date" name="tgl_haji" class="form-control" value="<?php echo $ph->tgl_haji ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_haji" class="form-control" value="<?php echo $ph->nama_haji ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_haji" class="form-control" value="<?php echo $ph->tempat_lahir_haji ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_lahir_haji" class="form-control" value="<?php echo $ph->ttl_lahir_haji ?>">
  </div>

  <div class="form-group">
    <label>No. NIK / KK</label>
    <input type="text" name="no_ktp_haji" class="form-control" value="<?php echo $ph->no_ktp_haji ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_haji" class="form-control" value="<?php echo $ph->jenis_kelamin_haji ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

  <div class="form-group">
    <label>Pekerjaan Haji</label>
    <input type="text" name="pekerjaan_haji" class="form-control" value="<?php echo $ph->pekerjaan_haji ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_haji" id="exampleFormControlTextarea1" rows="3" value="<?php echo $ph->alamat_haji ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_haji" id="exampleFormControlTextarea1" rows="3" value="<?php echo $ph->keterangan_haji ?>"></textarea>
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
