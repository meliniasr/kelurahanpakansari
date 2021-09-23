<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.card-header -->
  <div class="card-body">
    <div class="callout callout-info">
      <h4><strong><u> Edit Blangko Kematian  </u></strong></h4>
      <?php foreach ($blangkokematian as $skk) { ?>

<form action="<?php echo base_url() . 'blangkokematian/update'; ?>" method="post">

  <div class="form-group">
    <label class="control-label">Bulan Register</label>
    <input type="hidden" name="id_blangkokematian" class="form-control" value="<?php echo $skk->id_blangkokematian ?>">
    <div class="col-lg-12">
      <select name="bulan_register_blangkokematian" class="form-control" value="<?php echo $skk->bulan_register_blangkokematian ?>">
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
      <select name="tahun_register_blangkokematian" class="form-control" value="<?php echo $skk->tahun_register_blangkokematian ?>">
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
    <label>RT/RW</label>
    <input type="text" name="rt_blangkokematian" class="form-control" value="<?php echo $skk->rt_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Tgl Surat Pengantar</label>
    <input type="text" name="tgl_suratpengantar_blangkokematian" class="form-control" value="<?php echo $skk->tgl_suratpengantar_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Tgl Dibuat Suratnya</label>
    <input type="text" name="tgl_dibuat_blangkokematian" class="form-control" value="<?php echo $skk->tgl_dibuat_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Nama Pemohon</label>
    <input type="text" name="nama_pemohon_blangkokematian" class="form-control" value="<?php echo $skk->nama_pemohon_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Nama Kepala Keluarga</label>
    <input type="text" name="nama_kepalakeluarga_blangkokematian" class="form-control" value="<?php echo $skk->nama_kepalakeluarga_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Jenis Kelamin</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_blangkokematian" class="form-control" value="<?php echo $skk->jenis_kelamin_blangkokematian ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Tempat Tgl Lahir</label>
    <input type="text" name="ttl_blangkokematian" class="form-control" value="<?php echo $skk->ttl_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Bangsa</label>
    <input type="text" name="bangsa_blangkokematian" class="form-control" value="<?php echo $skk->bangsa_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Agama</label>
    <div class="col-lg-12">
      <select name="agama_blangkokematian" class="form-control" value="<?php echo $skk->agama_blangkokematian ?>">
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
    <label>NIK</label>
    <input type="text" name="nik_blangkokematian" class="form-control" value="<?php echo $skk->nik_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>KK</label>
    <input type="text" name="kk_blangkokematian" class="form-control" value="<?php echo $skk->kk_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_blangkokematian" class="form-control" value="<?php echo $skk->pekerjaan_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Status Perkawinan</label>
    <div class="col-lg-12">
      <select name="statuskawin_blangkokematian" class="form-control" value="<?php echo $skk->statuskawin_blangkokematian ?>">
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Cerai Hidup">Cerai Hidup</option>
        <option value="Cerai Mati">Cerai Mati</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_blangkokematian" id="exampleFormControlTextarea1" rows="3" value="<?php echo $skk->alamat_blangkokematian ?>"></textarea>
  </div>

  <div class="form-group">
    <label class="control-label">Status Hubungan Keluarga</label>
    <div class="col-lg-12">
      <select name="statushubungankeluarga" class="form-control" value="<?php echo $skk->statushubungankeluarga ?>">
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
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Nama Orang Meninggal</label>
    <input type="text" name="nama_si_meninggal" class="form-control" value="<?php echo $skk->nama_si_meninggal ?>">
  </div>

  <div class="form-group">
    <label>Tgl Meninggalnya</label>
    <input type="text" name="tgl_kematian_blangkokematian" class="form-control" value="<?php echo $skk->tgl_kematian_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Dikarenakan</label>
    <input type="text" name="dikarenakan_blangkokematian" class="form-control" value="<?php echo $skk->dikarenakan_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Meninggal Di</label>
    <input type="text" name="meninggal_di_blangkokematian" class="form-control" value="<?php echo $skk->meninggal_di_blangkokematian ?>">
  </div>

  <div class="form-group">
    <label>Tujuan</label>
    <input type="text" name="tujuan_untuk_blangkokematian" class="form-control" value="<?php echo $skk->tujuan_untuk_blangkokematian ?>">
  </div>

  <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php } ?>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<!-- /.card -->
<!-- general form elements disabled -->
</div>
</div>
</div>
</div>


