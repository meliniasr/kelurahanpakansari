<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data SKCK</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data SKCK</li>
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
          <a class="btn btn-danger" href="<?php echo base_url('skck/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
          <thead>
            <tr>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>No. NIK</th>
                <th>Untuk Keperluan</th>
                <th>Keterangan</th>
              <th width="90px">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              foreach ($skck as $s) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $s->tgl_skck ?></td>
                  <td><?php echo $s->nama_skck ?></td>
                  <td><?php echo $s->tempat_lahir_skck ?></td>
                  <td><?php echo $s->ttl_skck ?></td>
                  <td><?php echo $s->jenis_kelamin_skck ?></td>
                  <td><?php echo $s->nik_skck ?></td>
                  <td><?php echo $s->tujuan_skck ?></td>
                  <td><?php echo $s->keterangan_skck ?></td>
                <td style="text-align:center" width="100px">
                  <?php
                  echo anchor(site_url('skck/detail/' . $s->id_skck), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('skck/edit/' . $s->id_skck),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('skck/hapus/' . $s->id_skck), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SKCK</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url() . 'skck/tambah_aksi'; ?>">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tgl_skck" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_skck" class="form-control">
            </div>

            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" name="tempat_lahir_skck" class="form-control">
            </div>

            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" name="ttl_skck" class="form-control">
            </div>

            <div class="form-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="col-lg-12">
                <select name="jenis_kelamin_skck" class="form-control">
                  <option value="Laki-laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="control-label">Status Perkawinan</label>
              <div class="col-lg-12">
                <select name="status_perkawinan_skck" class="form-control">
                  <option value="Belum Kawin">Belum Kawin</option>
                  <option value="Kawin">Kawin</option>
                  <option value="Cerai Hidup">Cerai Hidup</option>
                  <option value="Cerai Mati">Cerai Mati</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="control-label">Agama</label>
              <div class="col-lg-12">
                <select name="agama_skck" class="form-control">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Kong Hucu">Kong Hucu</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label">Pendidikan Terakhir</label>
              <div class="col-lg-12">
                <select name="pendidikan_terakhir_skck" class="form-control">
                  <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                  <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                  <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                  <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                  <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                  <option value="Diploma I/II">Diploma I/II</option>
                  <option value="Akademi/Diploma III/Sarjana Muda">Akademi/Diploma III/Sarjana Muda</option>
                  <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                  <option value="Strata II">Strata II</option>
                  <option value="Strata III">Strata III</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat_skck" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
              <label>No. NIK KTP</label>
              <input type="text" name="nik_skck" class="form-control">
            </div>

            <div class="form-group">
              <label>Untuk Keperluan </label>
              <input type="text" name="tujuan_skck" class="form-control">
            </div>

            <div class="form-group">
              <label>Keterangan </label>
              <textarea class="form-control" name="keterangan_skck" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>