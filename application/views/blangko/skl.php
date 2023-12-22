<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Surat Keterangan Kelahiran (SKL)</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Surat Keterangan Kelahiran (SKL)</li>
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
            <th>KK</th>
            <th>No. Akta Nikah</th>
            <th>Nama Anak</th>
            <th>Tempat Lahir Anak</th>
            <th>Tgl Lahir Anak</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Tgl Dibuat Surat</th>
            <th width="120px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($skl as $skl) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $skl->kk_skl ?></td>
              <td><?php echo $skl->no_aktanikah ?></td>
              <td><?php echo $skl->nama_anak ?></td>
              <td><?php echo $skl->tempat_lahir_anak_skl ?></td>
              <td><?php echo $skl->tgl_lahir_anak_skl ?></td>
              <td><?php echo $skl->nama_ayah_skl ?></td>
              <td><?php echo $skl->nama_ibu_skl ?></td>
              <td><?php echo $skl->tgl_dibuat_suratskl ?></td>
              <td style="text-align:center" width="100px">
                <?php
                echo anchor(site_url('skl/detail/' . $skl->id_skl), '<i class="fa fa-search-plus"></i>', array('title' => 'detail', 'class' => 'btn btn-primary btn-sm', 'target' => '_blank'));
                echo anchor(site_url('skl/pdf/' . $skl->id_skl), '<i class="far fa-fw fa-file-pdf"></i>', array('title' => 'pdf', 'class' => 'btn btn-danger btn-sm', 'target' => '_blank'));
                echo anchor(site_url('skl/edit/' . $skl->id_skl),  '<i class="fa fa-edit"></i>', array('title' => 'edit', 'class' => 'btn btn-info btn-sm', 'target' => '_blank'));
                echo anchor(site_url('skl/hapus/' . $skl->id_skl), '<i class="fa fa-trash"></i>', 'title="hapus" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Anda yakin ingin menghapusnya ?\')"');
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT SKL</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() . 'skl/tambah_aksi'; ?>">
          <div class="form-group">
            <label class="control-label">Bulan Register</label>
            <div class="col-lg-12">
              <select name="bulan_register_skl" class="form-control">
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
              <select name="tahun_register_skl" class="form-control">
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
            <label>RT / RW (co: 003/007)</label>
            <input type="text" name="rt_skl" class="form-control">

          </div>
          <div class="form-group">
            <label>Tgl Surat Pengantar (co: 02 Juli 2021)</label>
            <input type="text" name="tgl_suratpengantar_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>KK</label>
            <input type="text" name="kk_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Surat Rumah Sakit</label>
            <input type="text" name="surat_rumahsakit" class="form-control">
          </div>

          <div class="form-group">
            <label>No. Akta Nikah</label>
            <input type="text" name="no_aktanikah" class="form-control">
          </div>

          <div class="form-group">
            <label>Tgl Dikeluarkannya Akta Nikah (co: 25-03-2012)</label>
            <input type="text" name="tgl_dikeluarkan_akta" class="form-control">
          </div>

          <div class="form-group">
            <label>Tgl Dikeluarkannya Surat Kelahiran(co: 25-03-2012)</label>
            <input type="text" name="tgl_dikeluarkan_skl" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin Anak</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_anak" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Nama Anak (HURUF KAPITAL SEMUA)</label>
            <input type="text" name="nama_anak" class="form-control">
          </div>

          <div class="form-group">
            <label>Anak Ke</label>
            <input type="text" name="anak_ke" class="form-control">
          </div>

          <div class="form-group">
            <label>Tempat Lahir Anak</label>
            <input type="text" name="tempat_lahir_anak_skl" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Hari Lahir Anak</label>
            <div class="col-lg-12">
              <select name="hari_lahir_anak_skl" class="form-control">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jum'at">Jum'at</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Tgl Lahir Anak (co: 14-12-1999)</label>
            <input type="text" name="tgl_lahir_anak_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Jam Lahir Anak (co: 09:40)</label>
            <input type="text" name="jam_lahir_anak_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Ayah (HURUF KAPITAL SEMUA)</label>
            <input type="text" name="nama_ayah_skl" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin Ayah</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_ayah_skl" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir Ayah (co: Bogor, 28-12-1988)</label>
            <input type="text" name="ttl_ayah_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Bangsa Ayah</label>
            <input type="text" name="bangsa_ayah_skl" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Agama Ayah</label>
            <div class="col-lg-12">
              <select name="agama_ayah_skl" class="form-control">
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
            <label>NIK Ayah</label>
            <input type="text" name="nik_ayah_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan Ayah</label>
            <input type="text" name="pekerjaan_ayah_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Ibu (HURUF KAPITAL SEMUA)</label>
            <input type="text" name="nama_ibu_skl" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Jenis Kelamin Ibu</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_ibu_skl" class="form-control">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir Ibu (co: Bogor, 28-12-1988)</label>
            <input type="text" name="ttl_ibu_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Bangsa Ibu</label>
            <input type="text" name="bangsa_ibu_skl" class="form-control">
          </div>

          <div class="form-group">
            <label class="control-label">Agama Ibu</label>
            <div class="col-lg-12">
              <select name="agama_ibu" class="form-control">
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
            <label>NIK Ibu</label>
            <input type="text" name="nik_ibu_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Pekerjaan Ibu</label>
            <input type="text" name="pekerjaan_ibu_skl" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_skl" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label>Tgl Dibuat Surat (co: 24 November 2021)</label>
            <input type="text" name="tgl_dibuat_suratskl" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>