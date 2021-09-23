<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Keterangan Belum Pernah Menikah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Keterangan Belum Pernah Menikah</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('belumpernahmenikah/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama Pemohon</th>
            <th>Tempat Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>No. NIK</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Tujuan</th>
            <th>Keterangan</th>
            <th width="90px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($belumpernahmenikah as $bpm) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $bpm->tgl_bpm ?></td>
              <td><?php echo $bpm->nama_pemohon_bn ?></td>
              <td><?php echo $bpm->ttl_lahir_bpm ?></td>
              <td><?php echo $bpm->jenis_kelamin_bpm ?></td>
              <td><?php echo $bpm->nik_bpm ?></td>
              <td><?php echo $bpm->pekerjaan_bpm ?></td>
              <td><?php echo $bpm->alamat_bpm ?></td>
              <td><?php echo $bpm->tujuan_bpm ?></td>
              <td><?php echo $bpm->keterangan_bpm ?></td>
              <td style="text-align:center">
                <?php
                echo anchor(site_url('belumpernahmenikah/detail/' . $bpm->id_bpm), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('belumpernahmenikah/edit/' . $bpm->id_bpm),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('belumpernahmenikah/hapus/' . $bpm->id_bpm), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BELUM PERNAH MENIKAH</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'belumpernahmenikah/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_bpm" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Pemohon</label>
            <input type="text" name="nama_pemohon_bn" class="form-control">
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir</label>
            <input type="text" name="ttl_lahir_bpm" class="form-control">
          </div>

          <div class="form-group">
            <label>No. NIK KTP</label>
            <input type="text" name="nik_bpm" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_bpm" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl_lahir_bpm" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_bpm" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_bpm" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Tujuan</label>
            <input type="text" name="tujuan_bpm" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_bpm" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>