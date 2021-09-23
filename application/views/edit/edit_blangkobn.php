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
      <h4><strong><u> Edit Blangko Belum Pernah Menikah </u></strong></h4>
      <?php foreach ($blangkobn as $bbn) { ?>

<form action="<?php echo base_url() . 'blangkobn/update'; ?>" method="post">

  <div class="form-group">
    <label class="control-label">Bulan Register</label>
    <input type="hidden" name="id_blangkobn" class="form-control" value="<?php echo $bbn->id_blangkobn ?>">
    <div class="col-lg-12">
      <select name="bulan_register_blangkobn" class="form-control" value="<?php echo $bbn->bulan_register_blangkobn ?>">
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
      <select name="tahun_register_blangkobn" class="form-control" value="<?php echo $bbn->tahun_register_blangkobn ?>">
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
    <label>RT</label>
    <input type="text" name="rt_blangkobn" class="form-control" value="<?php echo $bbn->rt_blangkobn ?>">
  </div>


  <div class="form-group">
    <label>Tgl Surat Pengantar RT</label>
    <input type="text" name="tgl_suratpengantar_bn" class="form-control" value="<?php echo $bbn->tgl_suratpengantar_bn ?>">
  </div>


  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_blangkobn" class="form-control" value="<?php echo $bbn->nama_blangkobn ?>">
  </div>


  <div class="form-group">
    <label class="control-label">Jenis Kelamin</label>
    <div class="col-lg-12">
      <select name="jenis_kelamin_blangkobn" class="form-control" value="<?php echo $bbn->jenis_kelamin_blangkobn ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>Tempat Tgl Lahir</label>
    <input type="text" name="ttl_blangkobn" class="form-control" value="<?php echo $bbn->ttl_blangkobn ?>">
  </div>

  <div class="form-group">
    <label>Bangsa</label>
    <input type="text" name="bangsa_blangkobn" class="form-control" value="<?php echo $bbn->bangsa_blangkobn ?>">
  </div>

  <div class="form-group">
    <label class="control-label">Agama</label>
    <div class="col-lg-12">
      <select name="agama_blangkobn" class="form-control" value="<?php echo $bbn->agama_blangkobn ?>">
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
    <label class="control-label">Status Perkawinan</label>
    <div class="col-lg-12">
      <select name="statusperkawinan_blangkobn" class="form-control" value="<?php echo $bbn->statusperkawinan_blangkobn ?>">
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Cerai Hidup">Cerai Hidup</option>
        <option value="Cerai Mati">Cerai Mati</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>NO. NIK KTP</label>
    <input type="text" name="nik_blangkobn" class="form-control" value="<?php echo $bbn->nik_blangkobn ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_blangkobn" class="form-control" value="<?php echo $bbn->pekerjaan_blangkobn ?>">
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_blangkobn" id="exampleFormControlTextarea1" rows="3" value="<?php echo $bbn->alamat_blangkobn ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Di Pergunakan Untuk</label>
    <input type="text" name="dipergunakan_untuk_blangkobn" class="form-control" value="<?php echo $bbn->dipergunakan_untuk_blangkobn ?>">
  </div>

  <div class="form-group">
    <label>Tgl Buat Surat</label>
    <input type="text" name="tgl_dibuat_blangkobn" class="form-control" value="<?php echo $bbn->tgl_dibuat_blangkobn ?>">
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


