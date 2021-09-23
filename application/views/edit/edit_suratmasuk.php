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
      <h4><strong class="btn-primary"> Edit Surat Masuk </strong></h4>
      <?php foreach ($suratmasuk as $sm) { ?>

        <form action="<?php echo base_url() . 'suratmasuk/update'; ?>" method="post">
          <div class="form-group">
            <label>Tanggal Pengiriman Surat</label>
            <input type="hidden" name="id_suratmasuk" class="form-control" value="<?php echo $sm->id_suratmasuk ?>">
            <input type="date" name="tgl_pengiriman" class="form-control" value="<?php echo $sm->tgl_pengiriman ?>">
          </div>

          <div class="form-group">
            <label>Nama Instansi</label>
            <input type="text" name="nama_instansi_sm" class="form-control" value="<?php echo $sm->nama_instansi_sm ?>">
          </div>

          <div class="form-group">
            <label>Nomor Surat</label>
            <input type="text" name="no_suratmasuk" class="form-control" value="<?php echo $sm->no_suratmasuk ?>">
          </div>

          <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tgl_suratmasuk" class="form-control" value="<?php echo $sm->tgl_suratmasuk ?>">
          </div>

          <div class="form-group">
            <label>Prihal</label>
            <input type="text" name="prihal_suratmasuk" class="form-control" value="<?php echo $sm->prihal_suratmasuk ?>">
          </div>

          <div class="form-group">
            <label>Penanggung Jawab / Pengelola</label>
            <input type="text" name="penanggungjawab_suratmasuk" class="form-control" value="<?php echo $sm->penanggungjawab_suratmasuk ?>">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_suratmasuk" id="exampleFormControlTextarea1" rows="3" value="<?php echo $sm->keterangan_suratmasuk ?>"></textarea>
          </div>

          <button type=" reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
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