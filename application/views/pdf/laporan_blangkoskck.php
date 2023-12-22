<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <img style="margin-left: 20px;" src="<?= base_url() ?>assets/kopsurat.png">
    <?php
    $no = 1;
    foreach ($blangkoskck as $skck) : ?>


        <div class="atas" style="font-family:helvetica; font-size:18px; margin-left:150px;margin-top:-50px; ">
            <h2>
                <b>
                    <u style="font-size:22px;">SURAT KETERANGAN CATATAN KEPOLISIAN</u>
                </b>
            </h2>
            <p style="margin-left:200px;font-size:15px; margin-top:-10px;"> Nomor : 300/ <a> </a> / <?php echo $skck->bulan_register_blangkoskck ?> / <?php echo $skck->tahun_register_blangkoskck ?> </p>
        </div>

        <div class="satu" style="font-family:helvetica; font-size:13px; margin-left:40px;">
            <label style="font-size:14px;">
                Berdasarkan:
                <br>
                1. Surat Pengantar dari Ketua RT. <?php echo $skck->rt_blangkoskck ?> No. <?php echo $skck->nomor_suratpengantar_blangkoskck ?> keperluan pembuatan Surat Keterangan;
            </label>
        </div>

        <div class="dua" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:5px; ">
            <label style="font-size:14px;">
                2. Kartu Keluarga No. <?php echo $skck->kk_blangkoskck ?> atas nama Kepala Keluarga <b><?php echo $skck->nama_kepalakeluarga_blangkoskck ?></b>;
            </label>
        </div>

        <div class="tiga" style="font-family:helvetica; font-size:13px; margin-left:40px; margin-top:5px; ">
            <label style="font-size:14px;">
                3. E-KTP, NIK. <?php echo $skck->nik_blangkoskck ?> atas nama <b><?php echo $skck->nama_blangkoskck ?></b>;
            </label>
        </div>

        <div class="content-1" style="font-family:helvetica; font-size:13px; margin-left:83px; margin-top:5px;">
            <label style="font-size:14px;">
                Sehubungan dengan hal tersebut, Melaksanakan ketentuan Pasal 81 Undang – undang No. 5 Tahun 1947, maka berdasarkan yang di atas, Tentang permohonan Keterangan Catatan Kepolisian :
            </label>
        </div>

        <div class="content-2" style="font-family:helvetica; font-size:13px; margin-left:150px;margin-top:20px;">
            <label>Nama : <b><?php echo $skck->nama_blangkoskck ?></b></label>
            <br>
            <div class="container">
                <label for="category">Jenis Kelamin :</label>
                <?php
                $pilihan = array('Laki-Laki', 'Perempuan');
                $isi = ($skck->jenis_kelamin_blangkoskck);
                $hasil = explode(",", $isi); // menyisipkan $isi ke tipe data $hasil
                foreach ($pilihan as $isi) {
                    $checkedStatus = "";
                    // periksa apakah $isi yang dipilih sama dengan di table database jenis kelamin untuk dicentang
                    if (in_array($isi, $hasil)) {
                        $checkedStatus = "checked";
                    }
                    echo "<label><input type='checkbox' " . $checkedStatus . " value='" . $isi . "'/>" . $isi . "</label>";
                }
                ?>
                <br>
                <label>
                    Tempat tanggal lahir : <?php echo $skck->ttl_blangkoskck ?>
                </label>
                <br>
                <label>
                    Suku / Bangsa : <?php echo $skck->bangsa_blangkoskck ?>
                </label>
                <br>
                <div class="container">
                    <label for="category">Agama :</label>
                    <?php
                    $pilihan = array('Islam', 'Kristen', 'Khatolik', 'Hindu', 'Budha', 'Kong Hucu');
                    $isi = ($skck->agama_blangkoskck);
                    $hasil = explode(",", $isi); // menyisipkan $isi ke tipe data $hasil
                    foreach ($pilihan as $isi) {
                        $checkedStatus = "";
                        // periksa apakah $isi yang dipilih sama dengan di table database agama untuk dicentang
                        if (in_array($isi, $hasil)) {
                            $checkedStatus = "checked";
                        }
                        echo "<label><input type='checkbox' " . $checkedStatus . " value='" . $isi . "'/>" . $isi . "</label>";
                    }
                    ?>
                    <br>
                    <div class="container">
                        <label for="category">Status :</label>
                        <?php
                        $pilihan = array('Belum Kawin', 'Kawin', 'Duda / Janda');
                        $isi = ($skck->statuskawin_blangkoskck);
                        $hasil = explode(",", $isi); // menyisipkan $isi ke tipe data $hasil
                        foreach ($pilihan as $isi) {
                            $checkedStatus = "";
                            // periksa apakah $isi yang dipilih sama dengan di table database status untuk dicentang
                            if (in_array($isi, $hasil)) {
                                $checkedStatus = "checked";
                            }
                            echo "<label><input type='checkbox' " . $checkedStatus . " value='" . $isi . "'/>" . $isi . "</label>";
                        }
                        ?>
                        <br>
                        <label>Pekerjaan : <?php echo $skck->pekerjaan_blangkoskck ?> </label>
                        <br>
                        <label>No. KTP : <?php echo $skck->nik_blangkoskck ?></label>
                        <br>
                        <label>Alamat : <?php echo $skck->alamat_blangkoskck ?> RT. <?php echo $skck->rt_blangkoskck ?>
                            Kel. Pakansari Kec. Cibinong Kab. Bogor .

                        </label>

                        <div class="empat" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:20px;">
                            <label style="font-size:14px;">
                                Bahwa berdasarkan data dan catatan yang ada serta sepanjang sepengetahuan kami, Orang tersebut :
                            </label>
                        </div>

                        <div class="lima" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:20px;">
                            <label style="font-size:14px;">
                                1. Penduduk Warga Kelurahan Pakansari Kecamatan Cibinong Kabupaten Bogor ;
                            </label>
                        </div>

                        <div class="enam" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:5px;">
                            <label style="font-size:14px;">
                                2. Tercatat baik dalam kehidupan bermasyarakat ;
                            </label>
                        </div>

                        <div class="tujuh" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:5px;">
                            <label style="font-size:14px;">
                                3. Tidak/Pernah tersangka perkara Kriminal dengan Instansi Kepolisian ;
                            </label>
                        </div>

                        <div class="delapan" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:5px;">
                            <label style="font-size:14px;">
                                4. Tidak dalam status Tahanan Wajib ;
                            </label>
                        </div>

                        <div class="sembilan" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:5px;">
                            <label style="font-size:14px;">
                                5. Tidak Pernah terlihat dalam penggunaan obat-obat terlarang.
                            </label>
                        </div>

                        <div class="sepuluh" style="font-family:helvetica; font-size:13px; margin-left:-110px; margin-top:20px;">
                            <label style="font-size:14px;">
                                Surat keterangan ini dibuat untuk : <b><?php echo $skck->tujuan_untuk_blangkoskck ?></b>
                            </label>
                        </div>

                        <div class="penutup" style="font-family:helvetica; font-size:13px; margin-left:-60px; margin-top:5px;">
                            <label>Demikian Surat Keterangan ini dibuat, untuk digunakan seperlunya dan apabila tidak benar maka Surat Keterangan ini batal adanya.</label>
                        </div>

                        <div class="ttd" style="font-family:helvetica; font-size:13px; margin-left:350px; margin-top:30px;">
                            <label>Pakansari, <?php echo $skck->tgl_dibuat_blangkoskck ?></label>
                            <br>
                            <label><b>LURAH PAKANSARI</b></label>
                        </div>


                    <?php endforeach; ?>
                    <script type="text/javascript">
                        window.print();
                    </script>
</body>

</html>