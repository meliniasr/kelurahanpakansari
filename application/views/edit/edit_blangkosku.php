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
      <h4><strong><U> Edit Surat Keterangan Usaha </U></strong></h4>
      <?php foreach ($blangkosku as $bs) { ?>

        <form action="<?php echo base_url() . 'blangkosku/update'; ?>" method="post">

          <div class="form-group">
            <label class="control-label">Bulan Register</label>
            <input type="hidden" name="id_blangkosku" class="form-control" value="<?php echo $bs->id_blangkosku ?>">
            <div class="col-lg-12">
              <select name="bulan_register_blangkosku" class="form-control" value="<?php echo $bs->bulan_register_blangkosku ?>">
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
              <select name="tahun_register_blangkosku" class="form-control" value="<?php echo $bs->tahun_register_blangkosku ?>">
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
            <input type="text" name="nama_blangkosku" class="form-control" value="<?php echo $bs->nama_blangkosku ?>">
          </div>


          <div class="form-group">
            <label class="control-label">Jenis Kelamin</label>
            <div class="col-lg-12">
              <select name="jenis_kelamin_blangkosku" class="form-control" value="<?php echo $bs->jenis_kelamin_blangkosku ?>">
                <option value="Laki-laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label>Tempat Tgl Lahir</label>
            <input type="text" name="ttl_blangkosku" class="form-control" value="<?php echo $bs->ttl_blangkosku ?>">
          </div>

          <div class="form-group">
            <label>Bangsa</label>
            <input type="text" name="bangsa_blangkosku" class="form-control" value="<?php echo $bs->bangsa_blangkosku ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Agama</label>
            <div class="col-lg-12">
              <select name="agama_blangkosku" class="form-control" value="<?php echo $bs->agama_blangkosku ?>">
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
            <input type="text" name="nik_blangkosku" class="form-control" value="<?php echo $bs->nik_blangkosku ?>">
          </div>

          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan_blangkosku" class="form-control" value="<?php echo $bs->pekerjaan_blangkosku ?>">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat_blangkosku" id="exampleFormControlTextarea1" rows="3" value="<?php echo $bs->alamat_blangkosku ?>"></textarea>
          </div>

          <div class="form-group">
            <label>RT / RW</label>
            <input type="text" name="rt_blangkosku" class="form-control" value="<?php echo $bs->rt_blangkosku ?>">
          </div>

          <div class="form-group">
            <label>Tgl Buat Surat</label>
            <input type="text" name="tgl_dibuat_blangkosku" class="form-control" value="<?php echo $bs->tgl_dibuat_blangkosku ?>">
          </div>

          <div class="form-group">
            <label>Untuk Apa</label>
            <input type="text" name="usaha_apa_blangkosku" class="form-control" value="<?php echo $bs->usaha_apa_blangkosku ?>">
          </div>

          <div class="form-group">
            <label>Tujuan Keperluan</label>
            <input type="text" name="tujuan_keperluan_blangkosku" class="form-control" value="<?php echo $bs->tujuan_keperluan_blangkosku ?>">
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