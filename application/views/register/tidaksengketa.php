<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Surat Pernyataan Tidak Sengketa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Surat Pernyataan Tidak Sengketa</li>
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
          <a class="btn btn-danger" href="<?php echo base_url('tidaksengketa/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
          <thead>
            <tr>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama Pemohon</th>
                <th>Surat Kepemilikan</th>
                <th>Alamat</th>
                <th>Keterangan</th>
              <th width="90px">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              foreach ($tidaksengketa as $ts) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $ts->tgl_tidaksengketa ?></td>
                  <td><?php echo $ts->nama_pemohon_tidaksengketa ?></td>
                  <td><?php echo $ts->suratkepemilikan_tidaksengketa ?></td>
                  <td><?php echo $ts->alamat_tidaksengketa ?></td>
                  <td><?php echo $ts->keterangan_tidaksengketa ?></td>
                <td style="text-align:center" width="100px">
                  <?php
                  echo anchor(site_url('tidaksengketa/detail/' . $ts->id_tidaksengketa), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('tidaksengketa/edit/' . $ts->id_tidaksengketa),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('tidaksengketa/hapus/' . $ts->id_tidaksengketa), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SURAT PERNYATAAN TIDAK SENGKETA</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() . 'tidaksengketa/tambah_aksi'; ?>">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tgl_tidaksengketa" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Pemohon</label>
              <input type="text" name="nama_pemohon_tidaksengketa" class="form-control">
            </div>

            <div class="form-group">
              <label>Surat Kepemilikan</label>
              <input type="text" name="suratkepemilikan_tidaksengketa" class="form-control">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat_tidaksengketa" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" name="keterangan_tidaksengketa" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>