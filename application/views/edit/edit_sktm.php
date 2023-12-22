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
      <h4><strong><u> Edit Tidak Mampu </u></strong></h4>
      <?php foreach ($sktm as $tm) { ?>

<form action="<?php echo base_url().'sktm/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_sktm" class="form-control" value="<?php echo $tm->id_sktm ?>">
    <input type="date" name="tgl_sktm" class="form-control" value="<?php echo $tm->tgl_sktm ?>">
  </div>

  <div class="form-group">
    <label>Nama Pemohon</label>
    <input type="text" name="nama_pemohon_sktm" class="form-control" value="<?php echo $tm->nama_pemohon_sktm ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_sktm" class="form-control" value="<?php echo $tm->tempat_lahir_sktm ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_lahir_sktm" class="form-control" value="<?php echo $tm->ttl_lahir_sktm ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_sktm" class="form-control" value="<?php echo $tm->jenis_kelamin_sktm ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

 <div class="form-group">
    <label>No. NIK KTP</label>
    <input type="text" name="nik_sktm" class="form-control" value="<?php echo $tm->nik_sktm ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_sktm" class="form-control" value="<?php echo $tm->pekerjaan_sktm ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_sktm" id="exampleFormControlTextarea1" rows="3" value="<?php echo $tm->alamat_sktm ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Digunakan Untuk</label>
    <input type="text" name="tujuan_sktm" class="form-control" value="<?php echo $tm->tujuan_sktm ?>">
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_sktm" id="exampleFormControlTextarea1" rows="3" value="<?php echo $tm->keterangan_sktm ?>"></textarea>
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


