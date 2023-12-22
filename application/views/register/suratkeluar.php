<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Register Surat Keluar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Surat Keluar</li>
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
        <a class="btn btn-danger" href="<?php echo base_url('suratkeluar/print') ?>" target="_blank"><i class="fa fa-print"> Print </i></a>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Instansi</th>
            <th>No. Surat</th>
            <th>Tgl Keluar Surat</th>
            <th>Prihal</th>
            <th>Penanggung Jawab</th>
            <th>Tgl Pengiriman Surat</th>
            <th>Keterangan</th>
            <th width="90px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($suratkeluar as $sk) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $sk->nama_instansi_sk ?></td>
              <td><?php echo $sk->no_suratkeluar ?></td>
              <td><?php echo $sk->tgl_suratkeluar ?></td>
              <td><?php echo $sk->prihal_suratkeluar ?></td>
              <td><?php echo $sk->penanggungjawab_suratkeluar ?></td>
              <td><?php echo $sk->tgl_pengiriman_sk ?></td>
              <td><?php echo $sk->keterangan_suratkeluar ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('suratkeluar/detail/' . $sk->id_suratkeluar), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('suratkeluar/edit/' . $sk->id_suratkeluar),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('suratkeluar/hapus/' . $sk->id_suratkeluar), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA SURAT KELUAR</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'suratkeluar/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Nama Instansi Yg Dituju</label>
            <input type="text" name="nama_instansi_sk" class="form-control">
          </div>

          <div class="form-group">
            <label>No. Surat</label>
            <input type="text" name="no_suratkeluar" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tgl_suratkeluar" class="form-control">
          </div>

          <div class="form-group">
            <label>Prihal Surat Keluar</label>
            <input type="text" name="prihal_suratkeluar" class="form-control">
          </div>


          <div class="form-group">
            <label>Penanggung Jawab / Pengelola</label>
            <input type="text" name="penanggungjawab_suratkeluar" class="form-control">
          </div>

          <div class="form-group">
            <label>Tanggal Pengiriman Surat</label>
            <input type="date" name="tgl_pengiriman_sk" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan_suratkeluar" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>