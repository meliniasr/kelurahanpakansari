<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data AJB & Sertifikat</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data AJB & Sertifikat</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('ajb/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama Penjual</th>
            <th>Kepemilikan</th>
            <th>Nama Pembeli</th>
            <th>No. Sppt</th>
            <th>No. Sertifikat</th>
            <th>Lokasi Tanah</th>
            <th>Keterangan</th>
            <th width="90px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($ajb as $aj) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $aj->tgl_ajb ?></td>
              <td><?php echo $aj->nama_penjual_ajb ?></td>
              <td><?php echo $aj->kepemilikan_ajb ?></td>
              <td><?php echo $aj->nama_pembeli_ajb ?></td>
              <td><?php echo $aj->no_sppt_ajb ?></td>
              <td><?php echo $aj->no_sertifikat_ajb ?></td>
              <td><?php echo $aj->lokasitanah_ajb ?></td>
              <td><?php echo $aj->keterangan_ajb ?></td>
              <td style="text-align:center">
                <?php
                echo anchor(site_url('ajb/detail/' . $aj->id_ajb), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('ajb/edit/' . $aj->id_ajb),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('ajb/hapus/' . $aj->id_ajb), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA AJB & SERTIFIKAT</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'ajb/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Penjual</label>
            <input type="text" name="nama_penjual_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Kepemilikan</label>
            <input type="text" name="kepemilikan_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_ajb" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Nama Pembeli</label>
            <input type="text" name="nama_pembeli_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Letter C Atas Nama</label>
            <input type="text" name="nama_letter_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>No. SPPT</label>
            <input type="text" name="no_sppt_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Luas Tanah</label>
            <input type="text" name="luastanah_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>No. Sertifikat</label>
            <input type="text" name="no_sertifikat_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Lokasi Tanah</label>
            <input type="text" name="lokasitanah_ajb" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_ajb" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>