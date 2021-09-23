<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">s
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <img style="margin-left:20px;" src="<?= base_url() ?>assets/kopsurat.png">

  <div class="card-body">
    <div class="row">
      <div class="col-12 table-responsive">
        <h5 class="card-title" style="font-size: 22px; margin-left:150px; margin-top:5px;"><u><b>TABEL REGISTER PERMOHONAN PROPOSAL</b></u></h5>
        <table border="2" class="table table-striped" width="30%" style="margin-left: 80px;">
          <thead>
            <tr>
            <th>No.</th>
            <th>Tgl</th>
            <th>Perihal Proposal</th>
            <th>No. Proposal</th>
            <th>Tgl Proposal</th>
            <th>Penanggung Jawab</th>
            <th>Pemohon Ke</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          foreach ($permohonanproposal as $pp) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pp->tgl_permohonanproposal ?></td>
              <td><?php echo $pp->perihal_proposal ?></td>
              <td><?php echo $pp->no_proposal ?></td>
              <td><?php echo $pp->tgl_proposal ?></td>
              <td><?php echo $pp->penanggungjawab_proposal ?></td>
              <td><?php echo $pp->pemohon_proposal ?></td>
              <td><?php echo $pp->alamat_proposal ?></td>
              <td><?php echo $pp->keterangan_proposal ?></td>
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