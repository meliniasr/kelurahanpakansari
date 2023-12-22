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
        <h5 class="card-title" style="font-size: 22px; margin-left:200px; margin-top:5px;"><u><b>TABEL REGISTER SURAT KELUAR</b></u></h5>
        <table border="3" class="table table-striped" style="width:30px;margin-left:80px;">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Instansi</th>
              <th>No. Surat</th>
              <th>Tgl Keluar Surat</th>
              <th>Prihal</th>
              <th>Penanggung Jawab</th>
              <th>Tgl Pengiriman Surat</th>
              <th>Keterangan</th>
            </tr>

            <?php
            $no = 1;
            foreach ($suratkeluar as $sk) : ?>

              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $sk->nama_instansi_sk ?></td>
                <td><?php echo $sk->no_suratkeluar ?></td>
                <td><?php echo $sk->tgl_suratkeluar ?></td>
                <td><?php echo $sk->prihal_suratkeluar ?></td>
                <td><?php echo $sk->penanggungjawab_suratkeluar ?></td>
                <td><?php echo $sk->tgl_pengiriman_sk ?></td>
                <td><?php echo $sk->keterangan_suratkeluar ?></td>
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

</body>

</html>