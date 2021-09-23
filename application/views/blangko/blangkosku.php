<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Surat Keterangan Usaha (SKU)</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Surat Keterangan Usaha (SKU)</li>
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
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tempat Tgl Lahir</th>
            <th>No. NIK</th>
            <th>Tgl Buat Surat</th>
            <th>Tujuan Keperluan</th>
            <th width="120px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($blangkosku as $bs) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $bs->nama_blangkosku ?></td>
              <td><?php echo $bs->ttl_blangkosku ?></td>
              <td><?php echo $bs->nik_blangkosku ?></td>
              <td><?php echo $bs->tgl_dibuat_blangkosku ?></td>
              <td><?php echo $bs->tujuan_keperluan_blangkosku ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('blangkosku/detail/'  . $bs->id_blangkosku), '<i class="fas fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkosku/pdf/' . $bs->id_blangkosku), '<i class="far fa-fw fa-file-pdf"></i>', array('title' => 'pdf', 'class' => 'btn btn-danger btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkosku/edit/' . $bs->id_blangkosku),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('blangkosku/hapus/' . $bs->id_blangkosku), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT SKU</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'blangkosku/tambah_aksi'; ?>">
          <div class="form-group">
            <label class="control-label">Bulan Register</label>
            <div class="col-lg-12">
              <select name="bulan_register_blangkosku" class="form-control">
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
                <option value="VII">VII</option>
                <option value="VIII">VIII</option>
                <option value="IX">IX</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label">Tahun Register</label>
            <div class="col-lg-12">
              <select name="tahun_register_blangkosku" class="form-control">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_blangkosku" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir (co: Bogor, 28 Agustus 2000)</label>
            <input type="text" name="ttl_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label>Bangsa</label>
            <input type="text" name="bangsa_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Agama</label>
            <div class="col-lg-12">
              <select name="agama_blangkosku" class="form-control">
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
            <label>NO. NIK KTP</label>
            <input type="text" name="nik_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_blangkosku" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>RT / RW (co: 003/007)</label>
            <input type="text" name="rt_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label>Tgl Buat Surat (co: 28 Agustus 2000)</label>
            <input type="text" name="tgl_dibuat_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label>Usaha Apa</label>
            <input type="text" name="usaha_apa_blangkosku" class="form-control">
          </div>

          <div class="form-group">
            <label>Tujuan Keperluan</label>
            <input type="text" name="tujuan_keperluan_blangkosku" class="form-control">
          </div>
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>