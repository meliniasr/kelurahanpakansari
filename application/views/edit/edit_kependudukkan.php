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
      <h4><strong><u> Edit Kependudukkan E-KTP & KK  </u></strong></h4>
      <?php foreach ($kependudukkan as $k) { ?>

<form action="<?php echo base_url().'kependudukkan/update'; ?>" method="post">

<div class="form-group">
    <label>Tanggal</label>
    <input type="hidden" name="id_kp" class="form-control" value="<?php echo $k->id_kp ?>">
    <input type="date" name="tgl_kp" class="form-control">
  </div>

  <div class="form-group">
    <label>E-KTP</label>
    <input type="text" name="nik_kp" class="form-control" value="<?php echo $k->nik_kp ?>">
  </div>

  <div class="form-group">
    <label>KK</label>
    <input type="text" name="kk_kp" class="form-control" value="<?php echo $k->kk_kp ?>">
  </div>

  <div class="form-group">
    <label>Nama Pemohon</label>
    <input type="text" name="nama_pemohon_kp" class="form-control" value="<?php echo $k->nama_pemohon_kp ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input type="text" name="tempat_lahir_kp" class="form-control" value="<?php echo $k->tempat_lahir_kp ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" name="ttl_kp" class="form-control" value="<?php echo $k->ttl_kp ?>">
  </div>

  <div class="form-group">
  <label class="control-label">Jenis Kelamin</label>
   <div class="col-lg-12">
   <select name="jenis_kelamin_kp" class="form-control" value="<?php echo $k->jenis_kelamin_kp ?>">
        <option value="Laki-laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>    
   </select>
</div>
</div>

<div class="form-group">
  <label class="control-label">Status Hubungan Dengan Kepala Keluarga</label>
   <div class="col-lg-12">
   <select name="status_kp" class="form-control" value="<?php echo $k->status_kp ?>">
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
        <option value="Lainnya..">Lainnya..</option>
   </select>
</div>
</div>

  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat_kp" id="exampleFormControlTextarea1" rows="3" value="<?php echo $k->alamat_kp ?>"></textarea>
  </div>

  <div class="form-group">
    <label>Keterangan</label>
    <textarea class="form-control" name="keterangan_kp" id="exampleFormControlTextarea1" rows="3" value="<?php echo $k->keterangan_kp ?>"></textarea>
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


