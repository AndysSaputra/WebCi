<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/part/head") ?>
</head>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <?php $this->load->view("admin/part/nav") ?>
</nav>
  <body id="page-top">

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <?php $this->load->view("admin/part/side.php") ?>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <?php $this->load->view("admin/part/breadcrumb.php") ?>

          <!-- Icon Cards-->
          <?php $this->load->view("admin/part/card.php") ?>

          <!-- Area Chart Example-->

          <!-- DataTables Example -->


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php $this->load->view("admin/part/footer.php") ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/part/logoutmodal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>/assets/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url()?>/assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>/assets/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url()?>/js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url()?>/js/demo/chart-area-demo.js"></script>

  </body>

</html>
