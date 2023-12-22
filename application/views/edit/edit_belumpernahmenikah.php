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
      <h4><strong><u> Edit Belum Pernah Menikah </u></strong></h4>
      <?php foreach ($belumpernahmenikah as $bpm) { ?>

        <form action="<?php echo base_url() . 'belumpernahmenikah/update'; ?>" method="post">


          <div class="form-group">
            <label>Tanggal</label>
            <input type="hidden" name="id_bpm" class="form-control" value="<?php echo $bpm->id_bpm ?>">
            <input type="date" name="tgl_bpm" class="form-control" value="<?php echo $bpm->tgl_bpm ?>">
          </div>

          <div class="form-group">
            <label>Nama Pemohon</label>
            <input type="text" name="nama_pemohon_bn" class="form-control" value="<?php echo $bpm->nama_pemohon_bn ?>">
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir</label>
            <input type="text" name="ttl_lahir_bpm" class="form-control" value="<?php echo $bpm->ttl_lahir_bpm ?>">
          </div>

          <div class="form-group">
            <label>No. NIK KTP</label>
            <input type="text" name="nik_bpm" class="form-control" value="<?php echo $bpm->nik_bpm ?>">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_bpm" class="form-control" value="<?php echo $bpm->pekerjaan_bpm ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_bpm" class="form-control" value="<?php echo $bpm->jenis_kelamin_bpm ?>">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_bpm" id="exampleFormControlTextarea1" rows="3" value="<?php echo $bpm->alamat_bpm ?>"></textarea>
          </div>

          <div class="form-group">
            <label>Tujuan</label>
            <input type="text" name="tujuan_bpm" class="form-control" value="<?php echo $bpm->tujuan_bpm ?>">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_bpm" id="exampleFormControlTextarea1" rows="3" value="<?php echo $bpm->keterangan_bpm ?>"></textarea>
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