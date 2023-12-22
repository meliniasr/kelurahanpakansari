<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Register Menikah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Menikah</li>
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
          <a class="btn btn-danger" href="<?php echo base_url('registermenikah/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
          <thead>
            <tr>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama Suami</th>
                <th>Tempat Lahir Suami</th>
                <th>Tgl Lahir Suami</th>
                <th>Nama Istri</th>
                <th>Tempat Lahir Istri</th>
                <th>Tgl Lahir Istri</th>
                <th>Alamat Istri</th>
                <th>Status Istri</th>
                <th>Keterangan</th>
              <th width="90px">Aksi</th>
            </tr>
          </thead>
          <tbody>
          
              <?php
              $no = 1;
              foreach ($registermenikah as $rm) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $rm->tgl_menikah ?></td>
                  <td><?php echo $rm->nama_suami_menikah ?></td>
                  <td><?php echo $rm->tempat_lahir_suami ?></td>
                  <td><?php echo $rm->tgl_lahir_suami ?></td>
                  <td><?php echo $rm->nama_istri_menikah ?></td>
                  <td><?php echo $rm->tempat_lahir_istri ?></td>
                  <td><?php echo $rm->tgl_lahir_istri ?></td>
                  <td><?php echo $rm->alamat_istri ?></td>
                  <td><?php echo $rm->status_istri ?></td>
                  <td><?php echo $rm->keterangan_menikah ?></td>
                <td style="text-align:center" width="100px">
                  <?php
                  echo anchor(site_url('registermenikah/detail/' . $rm->id_menikah), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('registermenikah/edit/' . $rm->id_menikah),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('registermenikah/hapus/' . $rm->id_menikah), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MENIKAH</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() . 'registermenikah/tambah_aksi'; ?>">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tgl_menikah" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Suami</label>
              <input type="text" name="nama_suami_menikah" class="form-control">
            </div>

            <div class="form-group">
              <label>Tempat Lahir Suami</label>
              <input type="text" name="tempat_lahir_suami" class="form-control">
            </div>

            <div class="form-group">
              <label>Tanggal Lahir Suami</label>
              <input type="date" name="tgl_lahir_suami" class="form-control">
            </div>

            <div class="form-group">
              <label>Alamat Suami</label>
              <textarea class="form-control" name="alamat_suami" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label class="control-label">Status</label>
              <div class="col-lg-12">
                <select name="status_suami" class="form-control">
                  <option value="Jejaka">Jejaka</option>
                  <option value="Duda">Duda</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label>Pekerjaan Suami</label>
              <input type="text" name="pekerjaan_menikah" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Istri</label>
              <input type="text" name="nama_istri_menikah" class="form-control">
            </div>

            <div class="form-group">
              <label>Tempat Lahir Istri</label>
              <input type="text" name="tempat_lahir_istri" class="form-control">
            </div>

            <div class="form-group">
              <label>Tanggal Lahir Istri</label>
              <input type="date" name="tgl_lahir_istri" class="form-control">
            </div>

            <div class="form-group">
              <label>Alamat Istri</label>
              <textarea class="form-control" name="alamat_istri" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label class="control-label">Status</label>
              <div class="col-lg-12">
                <select name="status_istri" class="form-control">
                  <option value="Jejaka">Jejaka</option>
                  <option value="Duda">Duda</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label>Keterangan</label>
              <textarea class="form-control" name="keterangan_menikah" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>