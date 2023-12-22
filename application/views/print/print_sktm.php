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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER TIDAK MAMPU (SKTM)</b></u></h5>
        <table border="2" class="table table-striped" width="30%">
          <thead>
            <tr>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama Pemohon</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>No. NIK</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Digunakan Untuk</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              foreach ($sktm as $tm) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $tm->tgl_sktm ?></td>
                  <td><?php echo $tm->nama_pemohon_sktm ?></td>
                  <td><?php echo $tm->tempat_lahir_sktm ?></td>
                  <td><?php echo $tm->ttl_lahir_sktm ?></td>
                  <td><?php echo $tm->jenis_kelamin_sktm ?></td>
                  <td><?php echo $tm->nik_sktm ?></td>
                  <td><?php echo $tm->pekerjaan_sktm ?></td>
                  <td><?php echo $tm->alamat_sktm ?></td>
                  <td><?php echo $tm->tujuan_sktm ?></td>
                  <td><?php echo $tm->keterangan_sktm ?></td>
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