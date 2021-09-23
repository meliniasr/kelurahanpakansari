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
      <h4><strong><u> Edit AJB & Sertifikat </u></strong></h4>
      <?php foreach ($ajb as $aj) { ?>

<form action="<?php echo base_url().'ajb/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_ajb" class="form-control" value="<?php echo $aj->id_ajb ?>">
    <input type="date" name="tgl_ajb" class="form-control" value="<?php echo $aj->tgl_ajb ?>">
  </div>

  <div class="form-group">
    <label>Nama Penjual</label>
    <input type="text" name="nama_penjual_ajb" class="form-control" value="<?php echo $aj->nama_penjual_ajb ?>">
  </div>

  <div class="form-group">
    <label>Kepemilikan</label>
    <input type="text" name="kepemilikan_ajb" class="form-control" value="<?php echo $aj->kepemilikan_ajb ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_ajb" id="exampleFormControlTextarea1" rows="3" value="<?php echo $aj->alamat_ajb ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Nama Pembeli</label>
    <input type="text" name="nama_pembeli_ajb" class="form-control" value="<?php echo $aj->nama_pembeli_ajb ?>">
  </div>

  <div class="form-group">
    <label>Letter C Atas Nama</label>
    <input type="text" name="nama_letter_ajb" class="form-control" value="<?php echo $aj->nama_letter_ajb ?>">
  </div>

  <div class="form-group">
    <label>No. SPPT</label>
    <input type="text" name="no_sppt_ajb" class="form-control" value="<?php echo $aj->no_sppt_ajb ?>">
  </div>

  <div class="form-group">
    <label>Luas Tanah</label>
    <input type="text" name="luastanah_ajb" class="form-control" value="<?php echo $aj->luastanah_ajb ?>">
  </div>

  <div class="form-group">
    <label>No. Sertifikat</label>
    <input type="text" name="no_sertifikat_ajb" class="form-control" value="<?php echo $aj->no_sertifikat_ajb ?>">
  </div>

  <div class="form-group">
    <label>Lokasi Tanah</label>
    <input type="text" name="lokasitanah_ajb" class="form-control" value="<?php echo $aj->lokasitanah_ajb ?>">
  </div>
  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_ajb" id="exampleFormControlTextarea1" rows="3" value="<?php echo $aj->keterangan_ajb ?>"></textarea>
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



<div class="content-wrapper">
    <section class="content">
        
    </section>
</div>

