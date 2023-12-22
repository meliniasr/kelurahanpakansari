<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Register Surat Masuk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Surat Masuk</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('suratmasuk/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl pengiriman</th>
            <th>Nama instansi</th>
            <th>No. surat</th>
            <th>Tgl Surat</th>
            <th>Prihal</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            <th width="90px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($suratmasuk as $sm) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $sm->tgl_pengiriman ?></td>
              <td><?php echo $sm->nama_instansi_sm ?></td>
              <td><?php echo $sm->no_suratmasuk ?></td>
              <td><?php echo $sm->tgl_suratmasuk ?></td>
              <td><?php echo $sm->prihal_suratmasuk ?></td>
              <td><?php echo $sm->penanggungjawab_suratmasuk ?></td>
              <td><?php echo $sm->keterangan_suratmasuk ?></td>
              <td style="text-align:center" width="100px"><a target="_blank">
                  <?php
                  echo anchor(site_url('suratmasuk/detail/' . $sm->id_suratmasuk), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('suratmasuk/edit/' . $sm->id_suratmasuk),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('suratmasuk/hapus/' . $sm->id_suratmasuk), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SURAT MASUK</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'suratmasuk/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal Pengiriman Surat</label>
            <input type="date" name="tgl_pengiriman" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Instansi</label>
            <input type="text" name="nama_instansi_sm" class="form-control">
          </div>


          <div class="form-group">
            <label>Nomor Surat</label>
            <input type="text" name="no_suratmasuk" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tgl_suratmasuk" class="form-control">
          </div>


          <div class="form-group">
            <label>Prihal</label>
            <input type="text" name="prihal_suratmasuk" class="form-control">
          </div>


          <div class="form-group">
            <label>Penanggung Jawab / Pengelola</label>
            <input type="text" name="penanggungjawab_suratmasuk" class="form-control">
          </div>


          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_suratmasuk" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>


          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>

    </div>
  </div>
</div>
</div>