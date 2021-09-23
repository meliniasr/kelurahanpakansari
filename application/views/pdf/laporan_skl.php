<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <img style="margin-left:20px" src="<?= base_url() ?>assets/kopsurat.png">
    <?php
    $no = 1;
    foreach ($skl as $skl) : ?>


        <div class="atas" style="font-family:helvetica; font-size:18px; margin-left:150px;margin-top:-50px; ">
            <h2>
                <b>
                    <u>SURAT KETERANGAN KELAHIRAN</u>
                </b>
            </h2>
            <p style="margin-left:150px;font-size:16px; margin-top:-20px;"> Nomor : 474.1/ <a> </a> / <?php echo $skl->bulan_register_skl ?> / <?php echo $skl->tahun_register_skl ?> </p>
        </div>

        <div class="satu" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:30px;">
            <label>
                Berdasarkan:
                <br>
                1. Surat Pengantar Ketua RT <?php echo $skl->rt_skl ?> yang dikeluarkan pada tanggal <?php echo $skl->tgl_suratpengantar_skl ?>, keperluan pembuatan Surat Keterangan Kelahiran;
            </label>
        </div>

        <div class="dua" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                2. Kartu Keluarga No. <?php echo $skl->kk_skl ?> atas nama Kepala Keluarga <b><?php echo $skl->nama_ayah_skl ?></b>;
            </label>
        </div>

        <div class="tiga" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                3. E-KTP, NIK. <?php echo $skl->nik_ayah_skl ?> atas nama <b><?php echo $skl->nama_ayah_skl ?></b>; (Suami) Nik <?php echo $skl->nik_ibu_skl ?> atas nama <b><?php echo $skl->nama_ibu_skl ?></b> ( Istri);
            </label>
        </div>

        <div class="empat" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                4. Kutipan Akta Nikah No. <?php echo $skl->no_aktanikah ?> yang dikeluarkan pada tanggal <?php echo $skl->tgl_dikeluarkan_akta ?>, atas nama <b><?php echo $skl->nama_ayah_skl ?></b> dan <b><?php echo $skl->nama_ibu_skl ?></b>;
            </label>
        </div>

        <div class="lima" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                5. Surat keterangan Kelahiran yang dikeluarkan <?php echo $skl->surat_rumahsakit ?>, pada tanggal <?php echo $skl->tgl_dikeluarkan_skl ?>
            </label>
        </div>

        <div class="content-1" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label>
                Sehubungan dengan hal tersebut diatas, dengan ini kami menerangkan bahwa, telah lahir seorang anak <b> <?php echo $skl->jenis_kelamin_anak ?></b> bernama :
            </label>
        </div>

        <div class="content11" style="font-family:helvetica; font-size:20px; margin-left:250px; margin-top:10px;">
            <label>
                <b><u><?php echo $skl->nama_anak ?></u></b>
            </label>
        </div>

        <div class="content-2" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:10px;">
            <label>Anak ke <?php echo $skl->anak_ke ?></label>
            <br>
            <label>AYAH :</label>
            <br>
        </div>

        <div class="content-22" style="font-family:helvetica; font-size:13px; margin-left:150px;">
            <label>Nama : <b><?php echo $skl->nama_ayah_skl ?></b></label>
            <br>
            <label>Tempat Tanggal Lahir: <?php echo $skl->ttl_ayah_skl ?></label>
            <br>
            <label>Bangsa / Agama : <?php echo $skl->bangsa_ayah_skl ?> / <?php echo $skl->agama_ayah_skl ?> </label>
            <br>
            <label>Pekerjaan : <?php echo $skl->pekerjaan_ayah_skl ?></label>
            <br>
            <label>NIK : <?php echo $skl->nik_ayah_skl ?></label>
            <br>
            <label>Alamat : <?php echo $skl->alamat_skl ?> RT <?php echo $skl->rt_skl ?> Kel. Pakansari Kec. Cibinong Kab. Bogor </label>
        </div>

        <div class="content-3" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:10px;">
            <label> IBU :</label>
            <br>
        </div>

        <div class="content-33" style="font-family:helvetica; font-size:13px; margin-left:150px;">
            <label>Nama : <b><?php echo $skl->nama_ibu_skl ?></b></label>
            <br>
            <label>Tempat Tanggal Lahir: <?php echo $skl->ttl_ibu_skl ?></label>
            <br>
            <label>Bangsa / Agama : <?php echo $skl->bangsa_ibu_skl ?> / <?php echo $skl->agama_ibu ?> </label>
            <br>
            <label>Pekerjaan : <?php echo $skl->pekerjaan_ibu_skl ?></label>
            <br>
            <label>NIK : <?php echo $skl->nik_ibu_skl ?></label>
            <br>
            <label>Alamat : <?php echo $skl->alamat_skl ?> RT <?php echo $skl->rt_skl ?> Kel. Pakansari Kec. Cibinong Kab. Bogor </label>
        </div>

        <div class="content-4" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label>Nama tersebut diatas benar dilahirkan di <b><?php echo $skl->tempat_lahir_anak_skl ?></b></label>
            <br>
            <label>Pada hari <b><?php echo $skl->hari_lahir_anak_skl ?></b> Tanggal <b><?php echo $skl->tgl_lahir_anak_skl ?></b> Pukul <?php echo $skl->jam_lahir_anak_skl ?> WIB </label>
            <br>
            <label>Dan nama tersebut adalah WNI Asli.</label>
        </div>

        <div class="penutup" style="font-family:helvetica; font-size:13px; margin-left:100px; margin-top:10px;">
            <label>
                Demikian surat keterangan ini dibuat, agar dipergunakan sebagaimana mestinya.
            </label>
        </div>

        <div class="ttd" style="font-family:helvetica; font-size:13px; margin-left:500px; margin-top:20px;">
            <label>Pakansari, <?php echo $skl->tgl_dibuat_suratskl ?></label>
            <br>
            <label><b>LURAH PAKANSARI</b></label>
        </div>

    <?php endforeach; ?>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>