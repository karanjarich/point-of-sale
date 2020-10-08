<?php
	session_start();
	include_once('connection_data.php');

	if(isset($_POST['edit'])){
		$product_category = $_POST['product_category'];
		$product_categoryno= $_POST['product_categoryno'];
		
		$sql = "UPDATE product_category SET product_category= '$product_category' WHERE product_categoryno= '$product_categoryno'";
             	//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'product_category updated successfully';
		}
			
		else{
			$_SESSION['error'] = 'Something went wrong in updating product_category';
		}
	}
	else{
		$_SESSION['error'] = 'Select product_category to edit first';
	}
   header('location:products_category.php');

?>