<?php
	session_start();
	include_once('connection_data.php');
    if(isset($_POST['edit'])){
		$product_no=$_POST['product_no'];
		$products_name = $_POST['products_name'];
		$reorder_level = $_POST['reorder_level'];
		$products_description=$_POST['products_description'];
		$sql = "UPDATE products SET products_name='$products_name',products_description= '$products_description',reorder_level= '$reorder_level' WHERE product_no= '$product_no'";
             	//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'products updated successfully';
			}
			
		else{
			$_SESSION['error'] = 'Something went wrong in updating products';
		}
	}
	else{
		$_SESSION['error'] = 'Select products to edit first';
	}
  header('location:products.php');
?>