<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Keterangan Izinrame</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Keterangan Izinrame</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('izinrame/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>No. NIK</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Waktu Acara</th>
            <th>Acara</th>
            <th width="90px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($izinrame as $ir) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $ir->tgl_izinrame ?></td>
              <td><?php echo $ir->nama_pemohon_izinrame ?></td>
              <td><?php echo $ir->tempat_lahir_izinrame ?></td>
              <td><?php echo $ir->ttl_izinrame ?></td>
              <td><?php echo $ir->jenis_kelamin_izinrame ?></td>
              <td><?php echo $ir->nik_izinrame ?></td>
              <td><?php echo $ir->pekerjaan_izinrame ?></td>
              <td><?php echo $ir->alamat_izinrame ?></td>
              <td><?php echo $ir->waktu_izinrame ?></td>
              <td><?php echo $ir->acara_izinrame ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('izinrame/detail/' . $ir->id_izinrame), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('izinrame/edit/' . $ir->id_izinrame),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('izinrame/hapus/' . $ir->id_izinrame), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KETERANGAN IZINRAME</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'izinrame/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_izinrame" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Pemohon</label>
            <input type="text" name="nama_pemohon_izinrame" class="form-control">
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_izinrame" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl_izinrame" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_izinrame" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>No. NIK KTP</label>
            <input type="text" name="nik_izinrame" class="form-control">
          </div>


          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_izinrame" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_izinrame" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Waktu Acara</label>
            <input type="date" name="waktu_izinrame" class="form-control">
          </div>

          <div class="form-group">
            <label>Acara</label>
            <input type="text" name="acara_izinrame" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>