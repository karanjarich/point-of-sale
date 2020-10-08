    <?php include'admin_nav.php';?>

    <div id="content-wrapper">

      <div class="container-fluid">
<!------ quiclinks-->
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box box-success">
<div class="box-body">
<a class="btn btn-app" href="sales.php">
<i class="fa fa-th"></i> POS </a>
<a class="btn btn-app" href="products.php">
<i class="fa fa-barcode"></i> Products </a>
<a class="btn btn-app" href="debtors.php">
<i class="fa fa-bell-o"></i> Open Debtors </a>
<a class="btn btn-app" href="customers.php">
<i class="fa fa-users"></i> Customers </a>
<a class="btn btn-app" href="settings.php">
<i class="fa fa-cogs"></i> Settings </a>
<a class="btn btn-app" href="users.php">
<i class="fa fa-users"></i> Users </a>
<a class="btn btn-app" href="backups.php">
<i class="fa fa-database"></i> Backups </a>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="box box-primary">
<div class="box-body">
<div id="chart" style="height:300px;"></div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="box box-primary">

<div class="box-body">
<div id="chart2" style="height:300px;"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
       
        <!-- DataTables Example -->
            </div>
      <!-- /.container-fluid -->
      <div class="col-md-12"> <h2 style="margin-left:10%">Reports shown here</h2>
	  </div>
	  <div class="container">
	  <div class="row">
	   <div class="col-md-6"> <h2 style="margin-left:10%">Reports shown here</h2>
	  </div>
	   <div  class="col-md-6"> <h2 style="margin-left:10%">Reports shown here</h2>
	  </div>
	  </div>
	  </div>
	    <div class="container">
	  <div class="row">
	   <div class="col-md-6"> <h2 style="margin-left:10%">Reports shown here</h2>
	  </div>
	   <div  class="col-md-6"> <h2 style="margin-left:10%">Reports shown here</h2>
	  </div>
	  </div>
	  </div>
     <?php include'footer.php';?>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
