 <!-- /.content-wrapper -->
 <footer class="main-footer">
   <strong>Copyright &copy; 2021 <a href="https://">Kelurahan Pakansari</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 1.0.0
   </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>


 <!-- Bootstrap 4 -->
 <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="<?php echo base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="<?php echo base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="<?php echo base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
 <script src="<?php echo base_url() ?>assets/DataTables/js/jquery.dataTables.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <script src="<?php echo base_url() ?>assets/DataTables/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url() ?>assets/DataTables/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>assets/DataTables/js/jquery.dataTables.min.js"></script>

 <!-- AdminLTE App -->
 <script src="<?php base_url() ?>assets/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php base_url() ?>assets/dist/js/demo.js"></script>

 <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
 <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
 <!--Wave Effects -->
 <script src="../dist/js/waves.js"></script>
 <!--Menu sidebar -->
 <script src="../dist/js/sidebarmenu.js"></script>
 <!--Custom JavaScript -->
 <script src="../dist/js/custom.min.js"></script>
 <!-- this page js -->
 <script src="<?php echo base_url() ?>assets/DataTables/datatable-checkbox-init.js"></script>
 <script src="<?php echo base_url() ?>assets/DataTables/jquery.multicheck.js"></script>
 <script src="<?php echo base_url() ?>assets/DataTables/datatables.min.js"></script>
 <script>
   /****************************************
    *       Basic Table                   *
    ****************************************/
   $("#zero_config").DataTable();
 </script>
 <!-- Page specific script -->
 <script>
   $(document).ready(function() {
     $("#example1").DataTable({
       "responsive": true,
       "lengthChange": false,
       "autoWidth": false,
       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false,
       "responsive": true,
     });
   });

   $("#tgl").datepicker({
     format: 'dd-mm-yyy',
     autoclose: true,
     todayHighlight: true,
     endDate: "<?php echo date('d-m-Y'); ?>"
   });

   $.widget.bridge('uibutton', $.ui.button)
 </script>