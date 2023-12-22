<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <img style="margin-left:20px;" src="<?= base_url() ?>assets/kopsurat.png">

  <div class="card-body">
    <div class="row">
      <div class="col-12 table-responsive">
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER REKOMENDASI SPPT</b></u></h5>
        <table border="2" class="table table-striped" width="30%" style="margin-left:30px;">
          <thead>
            <tr>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Bukti Kepemilikan</th>
                <th>Alamat</th>
                <th>Lokasi Tanah</th>
                <th>Luas Tanah & Bangunan</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              foreach ($sppt as $pt) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $pt->tgl_sppt ?></td>
                  <td><?php echo $pt->nama_sppt ?></td>
                  <td><?php echo $pt->tempat_lahir_sppt ?></td>
                  <td><?php echo $pt->ttl_sppt ?></td>
                  <td><?php echo $pt->jenis_kelamin_sppt ?></td>
                  <td><?php echo $pt->bukti_kepemilikan ?></td>
                  <td><?php echo $pt->alamat_sppt ?></td>
                  <td><?php echo $pt->lokasitanah_sppt ?></td>
                  <td><?php echo $pt->luas_tanah_sppt ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    window.print();
  </script>

  <script type="text/javascript">
    /*--This JavaScript method for Print command--*/

    function PrintDoc() {

      var toPrint = document.getElementById('tabel');
      var popupWin = window.open('');

      popupWin.document.open();

      popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
      popupWin.document.write(toPrint.outerHTML);
      popupWin.document.write('</html>');
      popupWin.document.close();

    }

    /*--This JavaScript method for Print Preview command--*/

    function PrintPreview() {

      var toPrint = document.getElementById('tabel');

      var popupWin = window.open('');

      popupWin.document.open();

      popupWin.document.write('<html><title>::Printpreview Data::</title><link rel="stylesheet" type="text/css" href="print.css" media="screen"/></head><body">')

      popupWin.document.write(toPrint.outerHTML);

      popupWin.document.write('</html>');

      popupWin.document.close();
    }
  </script>
</body>

</html>