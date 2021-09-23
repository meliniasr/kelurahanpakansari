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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER PENSIUN</b></u></h5>
        <table border="2" class="table table-striped" width="30%" style="margin-left: 30px;">
          <thead>
            <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>Pensiunan</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Tujuan</th>
            <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          foreach ($pensiunan as $pen) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pen->tgl_pensiun ?></td>
              <td><?php echo $pen->nama_pensiun ?></td>
              <td><?php echo $pen->tempat_lahir_pensiun ?></td>
              <td><?php echo $pen->ttl_lahir_pensiun ?></td>
              <td><?php echo $pen->pensiunan ?></td>
              <td><?php echo $pen->jenis_kelamin_pensiun ?></td>
              <td><?php echo $pen->agama_pensiun ?></td>
              <td><?php echo $pen->alamat_pensiun ?></td>
              <td><?php echo $pen->tujuan_pensiun ?></td>
              <td><?php echo $pen->keterangan_pensiun ?></td>
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