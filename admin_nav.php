
<?php 
  //https://stackoverflow.com/questions/20711891/php-easier-way-to-hide-show-menu-items-to-logged-in-logged-out-users
  session_start();
  if ($_SESSION["userlevel"]=="")
   {
       header('location:index.php');
   }

   ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Empos | Managing your Stock well</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-green static-top ">

    <a class="navbar-brand mr-1" href="index.html">Empos</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger"><?php echo "Loggen in as". $_SESSION["username"] ?></span>
        </a>
        </li>
    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="change_settings.php">Settings</a>
          <a class="dropdown-item" href="Logs.php">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
  <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-barcode"></i>
          <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="products.php">Products</a>
		      <a class="dropdown-item" href="products_category.php">Categories</a>
          <a class="dropdown-item" href="product_list.php">Stock List</a>
          <a class="dropdown-item" href="products.php">stock Report</a>

          </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="changed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa fa-shopping-cart"></i>
          <span>Sales</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="sales.php">Pos</a>
          <?php
          if($_SESSION["userlevel"] == "chief") { 
              echo '<a class="dropdown-item" href="view_sales.php">Periodic Sales</a>';
          }
          ?>
		   <a class="dropdown-item" href="customers_order.php">Customer Orders</a>
		  <a class="dropdown-item" href="orders_made.php">View Orders</a>
       
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa fa-users"></i>
          <span>People</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="customers.php">Customers</a>
          <a class="dropdown-item" href="user.php">Users</a>
          <a class="dropdown-item" href="suppliers.php">Suppliers</a>
          
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa fa-plus"></i>
          <span>Purchases</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="delivery_products.php">Stock In</a>
          <a class="dropdown-item" href="view_orders.php">Orders Verification</a>
         </div>
      </li>
	    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa fa-cogs"></i>
          <span>Accounts</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header"></h6>
          <a class="dropdown-item" href="accounts.php">Customers Debts</a>
          <a class="dropdown-item" href="payments.php">Payments</a>
          <a class="dropdown-item" href="cash_received.php">Cash In</a>
          <div class="dropdown-divider"></div>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reports</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="print_pdf.php">Customers</a>
           <?php
          if($_SESSION["userlevel"] == "chief") { 
          echo '<a class="dropdown-item" href="view_sales.php">Peridioc Sales Reports</a>';
          echo '<a class="dropdown-item" href="stock_level.php">Stock Level</a>';
          echo '<a class="dropdown-item" href="accounts.php">Customer Debts</a>';
          echo '<a class="dropdown-item" href="monthly_sales.php">Monthly Sales Reports</a>';
          echo '<a class="dropdown-item" href="daily_sales.php">Daily Sales Reports</a>';
          echo '<a class="dropdown-item" href="sales_reports.php">Sales</a>';

          }
          ?>
          
        </div>
      </li>
     </ul>