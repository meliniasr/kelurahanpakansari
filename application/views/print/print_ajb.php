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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER AJB & SERTIFIKAT</b></u></h5>
        <table border="2" class="table table-striped" width="30%">
          <thead>
            <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Nama Penjual</th>
            <th>Kepemilikan</th>
            <th>Alamat</th>
            <th>Nama Pembeli</th>
            <th>Letter C Atas Nama</th>
            <th>No. Sppt</th>
            <th>Luas Tanah</th>
            <th>No. Sertifikat</th>
            <th>Lokasi Tanah</th>
            <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          foreach ($ajb as $aj) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $aj->tgl_ajb ?></td>
              <td><?php echo $aj->nama_penjual_ajb ?></td>
              <td><?php echo $aj->kepemilikan_ajb ?></td>
              <td><?php echo $aj->alamat_ajb ?></td>
              <td><?php echo $aj->nama_pembeli_ajb ?></td>
              <td><?php echo $aj->nama_letter_ajb ?></td>
              <td><?php echo $aj->no_sppt_ajb ?></td>
              <td><?php echo $aj->luastanah_ajb ?></td>
              <td><?php echo $aj->no_sertifikat_ajb ?></td>
              <td><?php echo $aj->lokasitanah_ajb ?></td>
              <td><?php echo $aj->keterangan_ajb ?></td>
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