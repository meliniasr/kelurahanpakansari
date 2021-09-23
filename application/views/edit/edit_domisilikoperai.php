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
      <h4><strong><U> Edit Domisili Koperasi </U></strong></h4>
      <?php foreach ($domisilikoperai as $dk) { ?>

        <form action="<?php echo base_url() . 'domisilikoperai/update'; ?>" method="post">

          <div class="form-group">
            <label>Tanggal</label>
            <input type="hidden" name="id_koperasi" class="form-control" value="<?php echo $dk->id_koperasi ?>">
            <input type="date" name="tgl_koperasi" class="form-control" value="<?php echo $dk->tgl_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_pemilikkoperasi" class="form-control" value="<?php echo $dk->nama_pemilikkoperasi ?>">
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_koperasi" class="form-control" value="<?php echo $dk->tempat_lahir_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl_lahir_koperasi" class="form-control" value="<?php echo $dk->ttl_lahir_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_koperasi" class="form-control" value="<?php echo $dk->pekerjaan_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_koperasi" id="exampleFormControlTextarea1" rows="3" value="<?php echo $dk->alamat_koperasi ?>"></textarea>
          </div>

          <div class="form-group">
            <label>NO. NIK KTP</label>
            <input type="text" name="no_ktp_koperasi" class="form-control" value="<?php echo $dk->no_ktp_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Jenis Koperasi</label>
            <input type="text" name="jenis_koperasi" class="form-control" value="<?php echo $dk->jenis_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Status Kepemilikan Tempat</label>
            <input type="text" name="status_kepemilikan" class="form-control" value="<?php echo $dk->status_kepemilikan ?>">
          </div>

          <div class="form-group">
            <label> Nama Koperasi</label>
            <input type="text" name="nama_koperasi" class="form-control" value="<?php echo $dk->nama_koperasi ?>">
          </div>

          <div class="form-group">
            <label> Lokasi</label>
            <input type="text" name="lokasi_koperasi" class="form-control" value="<?php echo $dk->lokasi_koperasi ?>">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_koperasi" id="exampleFormControlTextarea1" rows="3" value="<?php echo $dk->keterangan_koperasi ?>"></textarea>
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