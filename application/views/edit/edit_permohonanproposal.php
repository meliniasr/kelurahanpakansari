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
      <h4><strong> Edit Permohonan Proposal </strong></h4>
      <?php foreach ($permohonanproposal as $pp) { ?>

        <form action="<?php echo base_url() . 'permohonanproposal/update'; ?>" method="post">

          <div class="form-group">
            <label>Tanggal</label>
            <input type="hidden" name="id_permohonanproposal" class="form-control" value="<?php echo $pp->id_permohonanproposal ?>">
            <input type="date" name="tgl_permohonanproposal" class="form-control" value="<?php echo $pp->tgl_permohonanproposal ?>">
          </div>

          <div class="form-group">
            <label>Perihal Proposal</label>
            <input type="text" name="perihal_proposal" class="form-control" value="<?php echo $pp->perihal_proposal ?>">
          </div>

          <div class="form-group">
            <label>Nomor</label>
            <input type="text" name="no_proposal" class="form-control" value="<?php echo $pp->no_proposal ?>">
          </div>

          <div class="form-group">
            <label>Tanggal Proposal</label>
            <input type="date" name="tgl_proposal" class="form-control" value="<?php echo $pp->tgl_proposal ?>">
          </div>

          <div class="form-group">
            <label>Penanggung Jawab</label>
            <input type="text" name="penanggungjawab_proposal" class="form-control" value="<?php echo $pp->penanggungjawab_proposal ?>">
          </div>

          <div class="form-group">
            <label>Pemohon Ke</label>
            <input type="text" name="pemohon_proposal" class="form-control" value="<?php echo $pp->pemohon_proposal ?>">
          </div>

          <div class="form-group">
            <label>Alamat Proposal</label>
            <textarea class="form-control" name="alamat_proposal" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pp->alamat_proposal ?>"></textarea>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_proposal" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pp->keterangan_proposal ?>"></textarea>
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