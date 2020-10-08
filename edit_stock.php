<?php
	session_start();
	include_once('connection_data.php');
  
    if(isset($_POST['add']) && isset($_POST['stock']) ){
		$product_no=$_POST['product_no'];
		$price = $_POST['price'];
		$buying = $_POST['buying'];
		$units_stock = $_POST['ustock'];
		$stock=$_POST['stock'];
		$stock=$_POST['stock'];
		$datee=$_POST['datee'];
		if($units_stock==""){
         $units_stock=0;
		}
		$updated_stock=$units_stock+$stock;
		$sql = "UPDATE products SET price= '$price',units_in_stock= '$updated_stock',buying= '$buying' WHERE product_no= '$product_no'";
             	//use for MySQLi OOP
		if($conn->query($sql)){
			
			
			}
			
		else{
			echo 'Something went wrong in updating products';
			//echo "not this $updated_stock;";
		}
		if($stock>0)
  {
	   $sql2="INSERT INTO `stock_details`(`product_no`, `quantity`,`stock_date`) VALUES ('$product_no','$stock','$datee')";
  }

 
	  if($conn->query($sql2)){
			
			//echo $updated_stock;
			//echo $updated_stock;
			}
			
		else{
			echo 'Something went wrong in updating products';
			//echo "not this $updated_stock;";
		}
	}
	else{
		$_SESSION['error'] = 'Select products to edit first';
	}
  
 header('location:products.php');
?>