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
      <h4><strong><u> Edit Blangko SKCK </u></strong></h4>
      <?php foreach ($blangkoskck as $skck) { ?>

<form action="<?php echo base_url() . 'blangkoskck/update'; ?>" method="post">

  <div class="form-group">
    <label class="control-label">Bulan Register</label>
    <input type="hidden" name="id_blangkoskck" class="form-control" value="<?php echo $skck->id_blangkoskck ?>">
    <div class="col-lg-12">
      <select name="bulan_register_blangkoskck" class="form-control" value="<?php echo $skck->bulan_register_blangkoskck ?>">
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
      <select name="tahun_register_blangkoskck" class="form-control" value="<?php echo $skck->tahun_register_blangkoskck ?>">
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
    <input type="text" name="rt_blangkoskck" class="form-control" value="<?php echo $skck->rt_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>No. Surat Pengantar</label>
    <input type="text" name="nomor_suratpengantar_blangkoskck" class="form-control" value="<?php echo $skck->nomor_suratpengantar_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama_blangkoskck" class="form-control" value="<?php echo $skck->nama_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>Nama Kepala Keluarga</label>
    <input type="text" name="nama_kepalakeluarga_blangkoskck" class="form-control" value="<?php echo $skck->nama_kepalakeluarga_blangkoskck ?>">
  </div>

  <div class="form-group" value="<?php echo $skck->jenis_kelamin_blangkoskck ?>">
    <label class="control-label">Jenis Kelamin</label>
    <div class="form-check">
      <input name="jenis_kelamin_blangkoskck" class="form-check-input" type="checkbox" value="Laki-Laki" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Laki-Laki
      </label>
    </div>

    <div class="form-check" style="margin-top: -24px; margin-left:200px;">
      <input name="jenis_kelamin_blangkoskck" class="form-check-input" type="checkbox" value="Perempuan" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Perempuan
      </label>
    </div>
  </div>

  <div class="form-group">
    <label>Tempat Tgl Lahir</label>
    <input type="text" name="ttl_blangkoskck" class="form-control" value="<?php echo $skck->ttl_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>Bangsa</label>
    <input type="text" name="bangsa_blangkoskck" class="form-control" value="<?php echo $skck->bangsa_blangkoskck ?>">
  </div>

  <div class="form-group" value="<?php echo $skck->agama_blangkoskck ?>">
    <label class="control-label">Agama</label>
    <div class="form-check">
      <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Islam" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Islam
      </label>
    </div>
    <div class="form-check" style="margin-top: -24px; margin-left:200px;">
      <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Kristen" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Kristen
      </label>
    </div>
    <div class="form-check">
      <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Khatolik" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Khatolik
      </label>
    </div>
    <div class="form-check" style="margin-top: -24px; margin-left:200px;">
      <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Hindu" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Hindu
      </label>
    </div>
    <div class="form-check">
      <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Budha" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Budha
      </label>
    </div>
    <div class="form-check" style="margin-top: -24px; margin-left:200px;">
      <input name="agama_blangkoskck" class="form-check-input" type="checkbox" value="Kong Hucu" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Kong Hucu
      </label>
    </div>
  </div>

  <div class="form-group">
    <label>NIK KTP</label>
    <input type="text" name="nik_blangkoskck" class="form-control" value="<?php echo $skck->nik_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>KK</label>
    <input type="text" name="kk_blangkoskck" class="form-control" value="<?php echo $skck->kk_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" name="pekerjaan_blangkoskck" class="form-control" value="<?php echo $skck->pekerjaan_blangkoskck ?>">
  </div>

  <div class="form-group" value="<?php echo $skck->agama_blangkoskck ?>">
    <label class="control-label">Status Perkawinan</label>
    <div class="form-check" style="margin-top: -24px; margin-left:200px;">
      <input name="statuskawin_blangkoskck" class="form-check-input" type="checkbox" value="Belum Kawin" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Belum Kawin
      </label>
    </div>
    <div class="form-check">
      <input name="statuskawin_blangkoskck" class="form-check-input" type="checkbox" value="Kawin" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Kawin
      </label>
    </div>
    <div class="form-check">
      <input name="statuskawin_blangkoskck" class="form-check-input" type="checkbox" value="Cerai Hidup" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Duda / Janda
      </label>
    </div>
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_blangkoskck" id="exampleFormControlTextarea1" rows="3" value="<?php echo $skck->alamat_blangkoskck ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Tujuan Untuk</label>
    <input type="text" name="tujuan_untuk_blangkoskck" class="form-control" value="<?php echo $skck->tujuan_untuk_blangkoskck ?>">
  </div>

  <div class="form-group">
    <label>Tgl Dibuat Surat</label>
    <input type="text" name="tgl_dibuat_blangkoskck" class="form-control" value="<?php echo $skck->tgl_dibuat_blangkoskck ?>">
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
