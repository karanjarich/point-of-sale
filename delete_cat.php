<?php
	session_start();
	include_once('connection_data.php'); 

	if(isset($_GET['product_categoryno'])){
		$sql = "DELETE FROM product_category WHERE product_categoryno = '".$_GET['product_categoryno']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Products category deleted successfully';
			
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Products';
		}
	}
	else{
		$_SESSION['error'] = 'Select Products to delete first';
	}
     
	header('location: products_category.php');
?>