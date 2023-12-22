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
    foreach ($blangkosktm as $bsk) : ?>


        <div class="atas" style="font-family:helvetica; font-size:18px; margin-left:150px;margin-top:-50px; ">
            <h2>
                <b>
                    <u>SURAT KETERANGAN TIDAK MAMPU</u>
                </b>
            </h2>
            <p style="margin-left:150px;font-size:16px; margin-top:-20px;"> Nomor : 401/ <a> </a> / <?php echo $bsk->bulan_register_blangkosktm ?> / <?php echo $bsk->tahun_register_blangkosktm ?> </p>
        </div>

        <div class="satu" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:30px;">
            <label>
                Berdasarkan:
                <br>
                1. Surat Pengantar RT.<?php echo $bsk->rt_blangkosktm ?> tanggal, <?php echo $bsk->tgl_suratpengantar_blangkosktm ?>, Keperluan membuat SKTM;
            </label>
        </div>

        <div class="dua" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                2. KK NO : <?php echo $bsk->kk_blangkosktm ?> atas nama <?php echo $bsk->nama_blangkosktm ?>
            </label>
        </div>

        <div class="tiga" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                3. E KTP NO : <?php echo $bsk->nik_blangkosktm ?> atas nama <?php echo $bsk->nama_blangkosktm ?>
            </label>
        </div>

        <div class="content-1" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label>
                Yang bertanda tangan di bawah ini , Lurah Pakansari Kecamatan Cibinong Kabupaten Bogor, menarangkan bahwa :
            </label>
        </div>
        
        <div class="content-2" style="font-family:helvetica; font-size:13px; margin-left:150px;">
            <label>Nama : <b><?php echo $bsk->nama_blangkosktm ?></b></label>
            <br>
            <label>Tempat Tanggal Lahir: <?php echo $bsk->ttl_blangkosktm ?></label>
            <br>
            <label>Bangsa / Agama : <?php echo $bsk->bangsa_blangkosktm ?> / <?php echo $bsk->agama_blangkosktm ?> </label>
            <br>
            <label>Pekerjaan : <?php echo $bsk->pekerjaan_blangkosktm ?></label>
            <br>
            <label>Status Perkawinan: <?php echo $bsk->statuskawin_blangkosktm ?></label>
            <br>
            <label>Alamat : <?php echo $bsk->alamat_blangkosktm ?> RT <?php echo $bsk->rt_blangkosktm ?> Kel. Pakansari Kec. Cibinong Kab. Bogor </label>
        </div>

        <div class="penutup" style="font-family:helvetica; font-size:13px; margin-left:100px; margin-top:30px;">
            <label>
                Menerangkan bahwa Nama tersebut di atas benar warga kami yang keadaan ekonominya kurang mampu.
            </label>
            <br>
            <label>Surat Keterangan ini diberikan untuk permohonan <?php echo $bsk->alamat_blangkosktm ?> untuk anak <?php echo $bsk->nama_anak_blangkosktm ?> ke <?php echo $bsk->nama_sekolah_blangkosktm ?>.</label>
        </div>

        <div class="ttd" style="font-family:helvetica; font-size:13px; margin-left:500px; margin-top:30px;">
            <label>Pakansari, <?php echo $bsk->tgl_dibuat_blangkosktm ?></label>
            <br>
            <label><b>LURAH PAKANSARI</b></label>
        </div>

    <?php endforeach; ?>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>