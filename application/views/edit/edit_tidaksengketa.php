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
      <h4><strong><u> Edit Tidak Sengketa </u></strong></h4>
      <?php foreach ($tidaksengketa as $ts) { ?>

<form action="<?php echo base_url().'tidaksengketa/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_tidaksengketa" class="form-control" value="<?php echo $ts->id_tidaksengketa ?>">
    <input type="date" name="tgl_tidaksengketa" class="form-control" value="<?php echo $ts->tgl_tidaksengketa ?>">
  </div>

  <div class="form-group">
    <label>Nama Pemohon</label>
    <input type="text" name="nama_pemohon_tidaksengketa" class="form-control" value="<?php echo $ts->nama_pemohon_tidaksengketa ?>">
  </div>

  <div class="form-group">
    <label>Surat Kepemilikan</label>
    <input type="text" name="suratkepemilikan_tidaksengketa" class="form-control" value="<?php echo $ts->suratkepemilikan_tidaksengketa ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_tidaksengketa" id="exampleFormControlTextarea1" rows="3" value="<?php echo $ts->alamat_tidaksengketa ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_tidaksengketa" id="exampleFormControlTextarea1" rows="3" value="<?php echo $ts->keterangan_tidaksengketa ?>"></textarea>
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
