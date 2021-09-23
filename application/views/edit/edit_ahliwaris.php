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
      <h4><strong><u> Edit Ahli Waris  </u></strong></h4>
      <?php foreach ($ahliwaris as $aw) { ?>

        <form action="<?php echo base_url() . 'ahliwaris/update'; ?>" method="post">

          <div class="form-group">
            <label>Tanggal</label>
            <input type="hidden" name="id_ahliwaris" class="form-control" value="<?php echo $aw->id_ahliwaris ?>">
            <input type="date" name="tgl_ahliwaris" class="form-control" value="<?php echo $aw->tgl_ahliwaris ?>">
          </div>

          <div class="form-group">
            <label>Nama Almarhum</label>
            <input type="text" name="nama_almarhum_ahliwaris" class="form-control" value="<?php echo $aw->nama_almarhum_ahliwaris ?>">
          </div>

          <div class="form-group">
            <label>Nama Ahli Waris</label>
            <input type="text" name="nama_ahliwaris" class="form-control" value="<?php echo $aw->nama_ahliwaris ?>">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_ahliwaris" id="exampleFormControlTextarea1" rows="3" value="<?php echo $aw->alamat_ahliwaris ?>"></textarea>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_ahliwaris" id="exampleFormControlTextarea1" rows="3" value="<?php echo $aw->keterangan_ahliwaris ?>"></textarea>
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