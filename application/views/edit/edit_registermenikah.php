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
      <h4><strong><u> Edit Menikah  </u></strong></h4>
      <?php foreach ($registermenikah as $rm) { ?>

<form action="<?php echo base_url() . 'registermenikah/update'; ?>" method="post">

  <div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_menikah" class="form-control" value="<?php echo $rm->id_menikah ?>">
    <input type="date" name="tgl_menikah" class="form-control" value="<?php echo $rm->tgl_menikah ?>">
  </div>

  <div class="form-group">
    <label>Nama Suami</label>
    <input type="text" name="nama_suami_menikah" class="form-control" value="<?php echo $rm->nama_suami_menikah ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir Suami</label>
    <input type="text" name="tempat_lahir_suami" class="form-control" value="<?php echo $rm->tempat_lahir_suami ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir Suami</label>
    <input type="date" name="tgl_lahir_suami" class="form-control" value="<?php echo $rm->tgl_lahir_suami ?>">
  </div>

  <div class="form-group">
    <label>Alamat Suami</label>
    <textarea class="form-control" name="alamat_suami" id="exampleFormControlTextarea1" rows="3" value="<?php echo $rm->alamat_suami ?>"></textarea>
  </div>

  <div class="form-group">
    <label class="control-label">Status</label>
    <div class="col-lg-12">
      <select name="status_suami" class="form-control" value="<?php echo $rm->status_suami ?>">
        <option value="Jejaka">Jejaka</option>
        <option value="Duda">Duda</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Pekerjaan Suami</label>
    <input type="text" name="pekerjaan_menikah" class="form-control" value="<?php echo $rm->pekerjaan_menikah ?>">
  </div>

  <div class="form-group">
    <label>Nama Istri</label>
    <input type="text" name="nama_istri_menikah" class="form-control" value="<?php echo $rm->nama_istri_menikah ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir Istri</label>
    <input type="text" name="tempat_lahir_istri" class="form-control" value="<?php echo $rm->tempat_lahir_istri ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir Istri</label>
    <input type="date" name="tgl_lahir_istri" class="form-control" value="<?php echo $rm->tgl_lahir_istri ?>">
  </div>

  <div class="form-group">
    <label>Alamat Istri</label>
    <textarea class="form-control" name="alamat_istri" id="exampleFormControlTextarea1" rows="3" value="<?php echo $rm->alamat_istri ?>"></textarea>
  </div>

  <div class="form-group">
    <label class="control-label">Status</label>
    <div class="col-lg-12">
      <select name="status_istri" class="form-control" value="<?php echo $rm->status_istri ?>">
        <option value="Jejaka">Jejaka</option>
        <option value="Duda">Duda</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_menikah" id="exampleFormControlTextarea1" rows="3" value="<?php echo $rm->keterangan_menikah ?>"></textarea>
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
