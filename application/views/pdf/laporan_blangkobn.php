<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <img style="margin-left: 20px;" src="<?= base_url() ?>assets/kopsurat.png">
    <?php
    $no = 1;
    foreach ($blangkobn as $bbn) : ?>

        <div class="atas" style="font-family:helvetica; font-size:18px; margin-left:100px;margin-top:-20px; ">
            <h2>
                <b>
                    <u style="font-size:22px;">SURAT KETERANGAN BELUM PERNAH MENIKAH</u>
                </b>
            </h2>
            <p style="margin-left:200px;font-size:15px; margin-top:-10px;"> Nomor : 474.2/ <a> </a> / <?php echo $bbn->bulan_register_blangkobn ?> / <?php echo $bbn->tahun_register_blangkobn ?> </p>
        </div>

        <div class="satu" style="font-family:helvetica; font-size:13px; margin-left:40px; ">
            <label style="font-size:14px;">
                Berdasarkan:
                <br>
                1. Pengantar RT <?php echo $bbn->rt_blangkobn ?> yang di keluarkan pada tanggal <?php echo $bbn->tgl_suratpengantar_bn ?>
            </label>
        </div>

        <div class="dua" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:-5px; ">
            <label style="font-size:14px;">
                2. E Ktp No : <?php echo $bbn->nik_blangkobn ?> atas nama <?php echo $bbn->nama_blangkobn ?>
            </label>
        </div>

        <div class="tiga" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:-5px; ">
            <label style="font-size:14px;">
                3. Surat Pernyataan Belum pernah menikah bermaterai
            </label>
        </div>

        <div class="content-1" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:30px;">
            <label style="font-size:14px;">
                Yang bertanda tangan dibawah ini, Lurah Pakansari Kecamatan Cibinong. Kabupaten Bogor, menerangkan bahwa :
            </label>
        </div>

        <div class="content-2" style="font-family:helvetica; font-size:13px; margin-left:150px;margin-top:20px;">
            <label>Nama : <?php echo $bbn->nama_blangkobn ?></label>
            <br>
            <label>Jenis Kelamin : <?php echo $bbn->jenis_kelamin_blangkobn ?></label>
            <br>
            <label>
                Tempat tanggal lahir : <?php echo $bbn->ttl_blangkobn ?>
            </label>
            <br>
            <label>
                Bangsa / Agama : <?php echo $bbn->bangsa_blangkobn ?> / <?php echo $bbn->agama_blangkobn ?>
            </label>
            <br>
            <label>NIK : <?php echo $bbn->nik_blangkobn ?></label>
            <br>
            <label>Pekerjaan : <?php echo $bbn->pekerjaan_blangkobn ?></label>
            <br>
            <label>Alamat : <?php echo $bbn->alamat_blangkobn ?> <?php echo $bbn->rt_blangkobn ?> Kelurahan Pakansari Kecamatan Cibinong Kabupaten Bogor</label>
        </div>

        <div class="content-3" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:30px;">
            <label>
                Nama tersebut diatas, <u>Benar Belum pernah Menikah.</u> Surat keterangan ini dipergunakan untuk :
            </label>
        </div>

        <div class="content-6" style="font-family:helvetica; font-size:13px; margin-left:250px; margin-top:10px;">
            <label>
                <b><u><?php echo $bbn->dipergunakan_untuk_blangkobn ?></u></b>
            </label>
        </div>

        <div class="penutup" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label>Demikian surat keterangan ini dibuat agar dipergunakan sebagaimana mestinya.</label>
        </div>

        <div class="ttd" style="font-family:helvetica; font-size:13px; margin-left:500px; margin-top:30px;">
            <label>Pakansari, <?php echo $bbn->tgl_dibuat_blangkobn ?></label>
            <br>
            <label><b>LURAH PAKANSARI</b></label>
        </div>

    <?php endforeach; ?>
    <script type="text/javascript">
        window.print();
    </script>
</body></html>