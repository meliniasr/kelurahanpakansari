<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Permohonan Proposal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Permohonan Proposal</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <table id="zero_config" class="table table-striped table-bordered">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>
        <a class="btn btn-danger" href="<?php echo base_url('permohonanproposal/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Perihal Proposal</th>
            <th>No. Proposal</th>
            <th>Tgl Proposal</th>
            <th>Penanggung Jawab</th>
            <th>Pemohon Ke</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($permohonanproposal as $pp) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pp->tgl_permohonanproposal ?></td>
              <td><?php echo $pp->perihal_proposal ?></td>
              <td><?php echo $pp->no_proposal ?></td>
              <td><?php echo $pp->tgl_proposal ?></td>
              <td><?php echo $pp->penanggungjawab_proposal ?></td>
              <td><?php echo $pp->pemohon_proposal ?></td>
              <td><?php echo $pp->alamat_proposal ?></td>
              <td><?php echo $pp->keterangan_proposal ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('permohonanproposal/detail/' . $pp->id_permohonanproposal), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('permohonanproposal/edit/' . $pp->id_permohonanproposal),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('permohonanproposal/hapus/' . $pp->id_permohonanproposal), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
                ?>
                </a>
              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PERMOHONAN PROPOSAL</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'permohonanproposal/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_permohonanproposal" class="form-control">
          </div>

          <div class="form-group">
            <label>Perihal Proposal</label>
            <input type="text" name="perihal_proposal" class="form-control">
          </div>

          <div class="form-group">
            <label>Nomor</label>
            <input type="text" name="no_proposal" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Proposal</label>
            <input type="date" name="tgl_proposal" class="form-control">
          </div>

          <div class="form-group">
            <label>Penanggung Jawab</label>
            <input type="text" name="penanggungjawab_proposal" class="form-control">
          </div>

          <div class="form-group">
            <label>Pemohon Ke</label>
            <input type="text" name="pemohon_proposal" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat Proposal</label>
            <textarea class="form-control" name="alamat_proposal" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_proposal" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>