<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div class="callout callout-info">
            <h4><strong> Detail Permohonan Proposal </strong></h4>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>Tanggal</th>
                    <td><?php echo $detail->tgl_permohonanproposal ?></td>
                </tr>

                <tr>
                    <th>Perihal Proposal</th>
                    <td><?php echo $detail->perihal_proposal ?></td>
                </tr>

                <tr>
                    <th>No. Proposal</th>
                    <td><?php echo $detail->no_proposal ?></td>
                </tr>

                <tr>
                    <th>Tanggal Proposal</th>
                    <td><?php echo $detail->tgl_proposal ?></td>
                </tr>

                <tr>
                    <th>Penanggung Jawab </th>
                    <td><?php echo $detail->penanggungjawab_proposal ?></td>
                </tr>

                <tr>
                    <th>Pemohon Ke</th>
                    <td><?php echo $detail->pemohon_proposal ?></td>
                </tr>

                <tr>
                    <th>Alamat Proposal</th>
                    <td><?php echo $detail->alamat_proposal ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td><?php echo $detail->alamat_proposal ?></td>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $detail->keterangan_proposal ?></td>
                </tr>
            </table>

            <a href="<?php echo base_url('permohonanproposal/index'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
</div>