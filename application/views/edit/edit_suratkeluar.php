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
      <h4><strong class="btn-primary"> Edit Surat Keluar </strong></h4>
      <?php foreach ($suratkeluar as $sk) { ?>

        <form action="<?php echo base_url() . 'suratkeluar/update'; ?>" method="post">

          <div class="form-group">
            <label>Nama Instansi Yg Dituju</label>
            <input type="hidden" name="id_suratkeluar" class="form-control" value="<?php echo $sk->id_suratkeluar ?>">
            <input type="text" name="nama_instansi_sk" class="form-control" value="<?php echo $sk->nama_instansi_sk ?>">
          </div>

          <div class="form-group">
            <label>Nomor Surat</label>
            <input type="text" name="no_suratkeluar" class="form-control" value="<?php echo $sk->no_suratkeluar ?>">
          </div>

          <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tgl_suratkeluar" class="form-control" value="<?php echo $sk->tgl_suratkeluar ?>">
          </div>

          <div class="form-group">
            <label>Prihal Surat Keluar</label>
            <input type="text" name="prihal_suratkeluar" class="form-control" value="<?php echo $sk->prihal_suratkeluar ?>">
          </div>

          <div class="form-group">
            <label>Penanggung Jawab / Pengelola</label>
            <input type="text" name="penanggungjawab_suratkeluar" class="form-control" value="<?php echo $sk->penanggungjawab_suratkeluar ?>">
          </div>

          <div class="form-group">
            <label>Tanggal Pengiriman Surat</label>
            <input type="date" name="tgl_pengiriman_sk" class="form-control" value="<?php echo $sk->tgl_pengiriman_sk ?>">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_suratkeluar" id="exampleFormControlTextarea1" rows="3" value="<?php echo $sk->keterangan_suratkeluar ?>"></textarea>
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