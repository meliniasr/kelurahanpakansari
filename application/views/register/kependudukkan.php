<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Kependudukkan E-Ktp & KK</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Kependudukkan E-Ktp & KK</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('kependudukkan/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>No. NIK</th>
            <th>No. KK</th>
            <th>Nama Pemohon</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Keterangan</th>
            <th width="90px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($kependudukkan as $k) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $k->tgl_kp ?></td>
              <td><?php echo $k->nik_kp ?></td>
              <td><?php echo $k->kk_kp ?></td>
              <td><?php echo $k->nama_pemohon_kp ?></td>
              <td><?php echo $k->tempat_lahir_kp ?></td>
              <td><?php echo $k->ttl_kp ?></td>
              <td><?php echo $k->keterangan_kp ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('kependudukkan/detail/' . $k->id_kp), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('kependudukkan/edit/' . $k->id_kp),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('kependudukkan/hapus/' . $k->id_kp), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KEPENDUDUKKAN E-KTP & KK</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'kependudukkan/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_kp" class="form-control">
          </div>

          <div class="form-group">
            <label>E-KTP</label>
            <input type="text" name="nik_kp" class="form-control">
          </div>

          <div class="form-group">
            <label>KK</label>
            <input type="text" name="kk_kp" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Pemohon</label>
            <input type="text" name="nama_pemohon_kp" class="form-control">
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_kp" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl_kp" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_kp" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Status Hubungan Dengan Kepala Keluarga</label>
            <div class="col-lg-12">
              <select name="status_kp" class="form-control">
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Suami">Suami</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
                <option value="Menantu">Menantu</option>
                <option value="Cucu">Cucu</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Mertua">Mertua</option>
                <option value="Famili Lain">Famili Lain</option>
                <option value="Pembantu">Pembantu</option>
                <option value="Lainnya..">Lainnya..</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_kp" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_kp" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>