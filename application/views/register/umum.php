<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Keterangan Umum</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keterangan Umum</li>
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
          <a class="btn btn-danger" href="<?php echo base_url('umum/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
          <thead>
            <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Pekerjaan</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tujuan</th>
            <th>Keterangan</th>
              <th width="90px">Aksi</th>
            </tr>
          </thead>
          <tbody>
           
        <?php
        $no = 1;
        foreach ($umum as $um) : ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $um->tgl_umum ?></td>
          <td><?php echo $um->nama_umum ?></td>
          <td><?php echo $um->tempat_lahir_umum ?></td>
          <td><?php echo $um->ttl_lahir_umum ?></td>
          <td><?php echo $um->pekerjaan_umum ?></td>
          <td><?php echo $um->jenis_kelamin_umum ?></td>
          <td><?php echo $um->agama_umum ?></td>
          <td><?php echo $um->tujuan_umum ?></td>
          <td><?php echo $um->keterangan_umum ?></td>
                <td style="text-align:center" width="100px">
                  <?php
                  echo anchor(site_url('umum/detail/' . $um->id_umum), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('umum/edit/' . $um->id_umum),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                  echo anchor(site_url('umum/hapus/' . $um->id_umum), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KETERANGAN UMUM</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('umum/tambah_aksi'); ?>
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl_umum" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_umum" class="form-control">
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_umum" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="ttl_lahir_umum" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_umum" class="form-control">
          </div>

          <div class="form-group">
          <label class="control-label">Jenis Kelamin</label>
           <div class="col-lg-12">
           <select name="jenis_kelamin_umum" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>    
           </select>
        </div>
      </div>

          <div class="form-group">
          <label class="control-label">Agama</label>
           <div class="col-lg-12">
           <select name="agama_umum" class="form-control">
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
            <label>Tujuan</label>
            <input type="text" name="tujuan_umum" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_umum" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>


        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        
        <?php echo form_close()?>
      </div>
    </div>
  </div>
</div>
</div>