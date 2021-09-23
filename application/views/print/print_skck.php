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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER SKCK</b></u></h5>
        <table border="2" class="table table-striped" width="30%">
          <thead>
                <th>No.</th>
                <th>Tgl</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Agama</th>
                <th>Pendidikan Terakhir</th>
                <th>Alamat</th>
                <th>No. NIK</th>
                <th>Untuk Keperluan</th>
                <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $no = 1;
              foreach ($skck as $s) : ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $s->tgl_skck ?></td>
                  <td><?php echo $s->nama_skck ?></td>
                  <td><?php echo $s->tempat_lahir_skck ?></td>
                  <td><?php echo $s->ttl_skck ?></td>
                  <td><?php echo $s->jenis_kelamin_skck ?></td>
                  <td><?php echo $s->status_perkawinan_skck ?></td>
                  <td><?php echo $s->agama_skck ?></td>
                  <td><?php echo $s->pendidikan_terakhir_skck ?></td>
                  <td><?php echo $s->alamat_skck ?></td>
                  <td><?php echo $s->nik_skck ?></td>
                  <td><?php echo $s->tujuan_skck ?></td>
                  <td><?php echo $s->keterangan_skck ?></td>
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