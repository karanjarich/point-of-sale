<?php
	session_start();
	include_once('connection_data.php'); 

	if(isset($_GET['product_no'])){
		$sql = "DELETE FROM products WHERE product_no = '".$_GET['product_no']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'products deleted successfully';
			
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting products';
		}
	}
	else{
		$_SESSION['error'] = 'Select products to delete first';
	}
     
	header('location: products.php');
?>