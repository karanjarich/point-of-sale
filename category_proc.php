<?php
	session_start();
	include_once('connection_data.php');

	if(isset($_POST['add'])){  
		$cat_name = $_POST['cat_name'];
		$sql = "INSERT INTO product_category(`product_category`) VALUES ('$cat_name')";
      
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'product_category added successfully';
			 
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn',' $sql)){
		// 	$_SESSION['success'] = 'product_category added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
   header('location:products_category.php');
?>