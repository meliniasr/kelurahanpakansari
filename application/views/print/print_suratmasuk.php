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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER SURAT MASUK</b></u></h5>
        <table border="3" class="table table-striped" style="width:30px;margin-left:80px;">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tgl pengiriman</th>
              <th>Nama instansi</th>
              <th>No. surat</th>
              <th>Tgl Surat</th>
              <th>Prihal</th>
              <th>Penanggung Jawab</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($suratmasuk as $sm) : ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $sm->tgl_pengiriman ?></td>
                <td><?php echo $sm->nama_instansi_sm ?></td>
                <td><?php echo $sm->no_suratmasuk ?></td>
                <td><?php echo $sm->tgl_suratmasuk ?></td>
                <td><?php echo $sm->prihal_suratmasuk ?></td>
                <td><?php echo $sm->penanggungjawab_suratmasuk ?></td>
                <td><?php echo $sm->keterangan_suratmasuk ?></td>
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