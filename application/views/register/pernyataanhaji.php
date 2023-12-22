<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pernyataan Haji</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pernyataan Haji</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('pernyataanhaji/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>No. NIK / KK</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th width="120px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($pernyataanhaji as $ph) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $ph->tgl_haji ?></td>
              <td><?php echo $ph->nama_haji ?></td>
              <td><?php echo $ph->tempat_lahir_haji ?></td>
              <td><?php echo $ph->ttl_lahir_haji ?></td>
              <td><?php echo $ph->no_ktp_haji ?></td>
              <td><?php echo $ph->jenis_kelamin_haji ?></td>
              <td><?php echo $ph->pekerjaan_haji ?></td>
              <td><?php echo $ph->alamat_haji ?></td>
              <td><?php echo $ph->keterangan_haji ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('pernyataanhaji/detail/' . $ph->id_haji), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('pernyataanhaji/edit/' . $ph->id_haji),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('pernyataanhaji/hapus/' . $ph->id_haji), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PERNYATAAN HAJI</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'pernyataanhaji/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_haji" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_haji" class="form-control">
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_haji" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl_lahir_haji" class="form-control">
          </div>

          <div class="form-group">
            <label>No. NIK / KK</label>
            <input type="text" name="no_ktp_haji" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_haji" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_haji" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_haji" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_haji" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>