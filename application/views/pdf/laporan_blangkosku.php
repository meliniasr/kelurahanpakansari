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
    foreach ($blangkosku as $bs) : ?>

        <div class="atas" style="font-family:helvetica; font-size:18px; margin-left:200px;margin-top:-50px; ">
            <h2>
                <b>
                    <u>SURAT KETERANGAN USAHA</u>
                </b>
            </h2>
            <p style="margin-left:100px;font-size:16px; margin-top:-20px;"> Nomor : 574/ <a> </a> / <?php echo $bs->bulan_register_blangkosku ?> / <?php echo $bs->tahun_register_blangkosku ?> </p>
        </div>

        <div class="content-1" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label>
                Yang bertanda tangan dibawah ini, Lurah Pakansari Kecamatan Cibinong Kabupaten Bogor, menerangkan bahwa :
            </label>
        </div>

        <div class="content-2" style="font-family:helvetica; font-size:13px; margin-left:150px;margin-top:20px;">
            <label>Nama : <?php echo $bs->nama_blangkosku ?></label>
            <br>
            <label>Jenis Kelamin : <?php echo $bs->jenis_kelamin_blangkosku ?></label>
            <br>
            <label>
                Tempat tanggal lahir : <?php echo $bs->ttl_blangkosku ?>
            </label>
            <br>
            <label>
                Bangsa / Agama : <?php echo $bs->bangsa_blangkosku ?> / <?php echo $bs->agama_blangkosku ?>
            </label>
            <br>
            <label>NIK : <?php echo $bs->nik_blangkosku ?></label>
            <br>
            <label>Pekerjaan : <?php echo $bs->pekerjaan_blangkosku ?></label>
            <br>
            <label>Alamat : <?php echo $bs->alamat_blangkosku ?> <?php echo $bs->rt_blangkosku ?> Kelurahan Pakansari Kecamatan Cibinong Kabupaten Bogor</label>
        </div>

        <div class="content-3" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:20px;">
            <label>Berdasarkan Surat Pernyataan yang di buat pada tanggal, <?php echo $bs->tgl_dibuat_blangkosku ?> yang ditandatangani bersangkutan dan Surat pengantar RT. 004/006 Kelurahan Pakansari Kecamatan Cibinong Kabupaten Bogor mempunyai usaha :</label>
        </div>

        <div class="content-4" style="font-family:helvetica; font-size:13px; margin-left:350px; margin-top:10px;">
            <label>
                <b><u><?php echo $bs->usaha_apa_blangkosku ?></u></b>
            </label>
        </div>

        <div class="content-5" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:10px;">
            <label>
                <p>Surat keterangan ini diberikan untuk keperluan :</p>
            </label>
        </div>

        <div class="content-6" style="font-family:helvetica; font-size:13px; margin-left:300px; margin-top:10px;">
            <label>
                <b><u><?php echo $bs->tujuan_keperluan_blangkosku ?></u></b>
            </label>
        </div>


        <div class="penutup" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label>Demikian surat Keterangan Usaha ini dibuat, agar dipergunakan sebagaimana mestinya.</label>
        </div>

        <div class="ttd" style="font-family:helvetica; font-size:13px; margin-left:500px; margin-top:30px;">
            <label>Pakansari, <?php echo $bs->tgl_dibuat_blangkosku ?></label>
            <br>
            <label><b>LURAH PAKANSARI</b></label>
        </div>

    <?php endforeach; ?>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>