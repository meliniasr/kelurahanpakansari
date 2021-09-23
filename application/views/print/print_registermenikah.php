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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER MENIKAH</b></u></h5>
        <table border="2" class="table table-striped" width="30%">
          <thead>
            <tr>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama Suami</th>
                <th>Tempat Lahir Suami</th>
                <th>Tgl Lahir Suami</th>
                <th>Alamat Suami</th>
                <th>Status Suami</th>
                <th>Pekerjaan Suami</th>
                <th>Nama Istri</th>
                <th>Tempat Lahir Istri</th>
                <th>Tgl Lahir Istri</th>
                <th>Alamat Istri</th>
                <th>Status Istri</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              foreach ($registermenikah as $rm) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $rm->tgl_menikah ?></td>
                  <td><?php echo $rm->nama_suami_menikah ?></td>
                  <td><?php echo $rm->tempat_lahir_suami ?></td>
                  <td><?php echo $rm->tgl_lahir_suami ?></td>
                  <td><?php echo $rm->alamat_suami ?></td>
                  <td><?php echo $rm->status_suami ?></td>
                  <td><?php echo $rm->pekerjaan_menikah ?></td>
                  <td><?php echo $rm->nama_istri_menikah ?></td>
                  <td><?php echo $rm->tempat_lahir_istri ?></td>
                  <td><?php echo $rm->tgl_lahir_istri ?></td>
                  <td><?php echo $rm->alamat_istri ?></td>
                  <td><?php echo $rm->status_istri ?></td>
                  <td><?php echo $rm->keterangan_menikah ?></td>
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