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
      <h4><strong><u> Edit Penduduk Datang</u></strong></h4>
      <?php foreach ($pendudukdatang as $pd) { ?>

<form action="<?php echo base_url().'pendudukdatang/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_pendudukdatang" class="form-control" value="<?php echo $pd->id_pendudukdatang ?>">
    <input type="date" name="tgl_pendudukdatang" class="form-control" value="<?php echo $pd->tgl_pendudukdatang ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_pendudukdatang" class="form-control" value="<?php echo $pd->nama_pendudukdatang ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_pendudukdatang" class="form-control" value="<?php echo $pd->tempat_lahir_pendudukdatang ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_pendudukdatang" class="form-control" value="<?php echo $pd->ttl_pendudukdatang ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_pendudukdatang" class="form-control" value="<?php echo $pd->pekerjaan_pendudukdatang ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_pendudukdatang" class="form-control" value="<?php echo $pd->jenis_kelamin_pendudukdatang ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

  <div class="form-group">
    <label>No. NIK KTP</label>
    <input type="text" name="nik_pendudukdatang" class="form-control" value="<?php echo $pd->nik_pendudukdatang ?>">
  </div>

  <div class="form-group">
    <label>Alamat Datang</label>
    <textarea class="form-control" name="alamat_datang_pendudukdatang" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pd->alamat_datang_pendudukdatang ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Alamat Asal</label>
    <textarea class="form-control" name="alamat_asal_pendudukdatang" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pd->alamat_asal_pendudukdatang ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_pendudukdatang" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pd->keterangan_pendudukdatang ?>"></textarea>
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
