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
    foreach ($blangkokematian as $skk) : ?>


        <div class="atas" style="font-family:helvetica; font-size:18px; margin-left:150px;margin-top:-50px; ">
            <h2>
                <b>
                    <u>SURAT KETERANGAN KEMATIAN</u>
                </b>
            </h2>
            <p style="margin-left:150px;font-size:16px; margin-top:-20px;"> Nomor : 474.3/ <a> </a> / <?php echo $skk->bulan_register_blangkokematian ?> / <?php echo $skk->tahun_register_blangkokematian ?></p>
        </div>

        <div class="satu" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                Berdasarkan:
                <br>
                1. Surat Pengantar dari Ketua RT. <?php echo $skk->rt_blangkokematian ?> yang dikeluarkan pada tanggal, <?php echo $skk->tgl_suratpengantar_blangkokematian ?>, keperluan pembuatan Surat Keterangan Kematian;
            </label>
        </div>

        <div class="dua" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                2. E Ktp No : <?php echo $skk->nik_blangkokematian ?> atas nama <b><?php echo $skk->nama_pemohon_blangkokematian ?></b>
            </label>
        </div>

        <div class="tiga" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>
                3. Surat Pernyataan Kematian yang dibuat dan di tandatangani oleh <b><?php echo $skk->nama_pemohon_blangkokematian ?></b> pada tanggal, <?php echo $skk->tgl_suratpengantar_blangkokematian ?> ;
            </label>
        </div>

        <div class="content-1" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label>
                Sehubungan dengan hal tersebut, Lurah Pakansari Kecamatan Cibinong Kabupaten Bogor, menerangkan bahwa :
            </label>
        </div>

        <div class="content-2" style="font-family:helvetica; font-size:13px; margin-left:150px;">
            <label>Nama : <b><?php echo $skk->nama_pemohon_blangkokematian ?></b></label>
            <br>
            <label>Jenis Kelamin : <?php echo $skk->jenis_kelamin_blangkokematian ?></label>
            <br>
            <label>
                Tempat tanggal lahir : <?php echo $skk->ttl_blangkokematian ?>
            </label>
            <br>
            <label>
                Bangsa / Agama : <?php echo $skk->bangsa_blangkokematian ?> / <?php echo $skk->agama_blangkokematian ?>
            </label>
            <br>
            <label>Status Perkawinan : <?php echo $skk->statuskawin_blangkokematian ?></label>
            <br>
            <label>Pekerjaan : <?php echo $skk->pekerjaan_blangkokematian ?></label>
            <br>
            <label>Alamat : <?php echo $skk->alamat_blangkokematian ?> RT <?php echo $skk->rt_blangkokematian ?> Kelurahan Pakansari Kecamatan Cibinong Kabupaten Bogor</label>
        </div>

        <div class="content-3" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:10px;">
            <label>
                Bahwa <?php echo $skk->statushubungankeluarga ?> yang bernama <b><?php echo $skk->nama_si_meninggal ?></b> telah meninggal dunia pada :
            </label>
        </div>

        <div class="content-4" style="font-family:helvetica; font-size:13px; margin-left:150px; margin-top:10px;">
            <label>Tanggal : <?php echo $skk->tgl_kematian_blangkokematian ?></label>
            <br>
            <label>Dikarenakan : <?php echo $skk->dikarenakan_blangkokematian ?></label>
            <br>
            <label>Meninggal di : <?php echo $skk->meninggal_di_blangkokematian ?> </label>
        </div>

        <div class="tujuan" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:10px;">
            <label>Surat Keterangan Kematian ini dibuat untuk: <b><?php echo $skk->tujuan_untuk_blangkokematian ?></b> </label>
        </div>

        <div class="penutup" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:10px;">
            <label>Demikian surat keterangan Kematian ini dibuat, agar dipergunakan sebagaimana mestinya. </label>
        </div>

        <div class="ttd" style="font-family:helvetica; font-size:13px; margin-left:500px; margin-top:30px;">
            <label>Pakansari, <?php echo $skk->tgl_dibuat_blangkokematian ?></label>
            <br>
            <label><b>LURAH PAKANSARI</b></label>
        </div>

    <?php endforeach; ?>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>