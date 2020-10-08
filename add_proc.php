<?php
	session_start();
	include_once('connection_data.php');

	if(isset($_POST['add'])){  
		$customer_name = $_POST['customer_name'];
		$customer_phone = $_POST['customer_phone'];
		$customers_no = str_replace(' ','',$_POST['customer_phone']);
		$customer_location = $_POST['customer_location'];
		$customer_address = $_POST['customer_address'];
		$sql = "INSERT INTO customers(`customer_name`, `customer_no`, `customer_phone`, `customer_location`, `customer_address`) VALUES ('$customer_name','$customers_no','$customer_phone','$customer_location','$customer_address')";
      
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'customers added successfully';
			 
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn',' $sql)){
		// 	$_SESSION['success'] = 'customers added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
   header('location:sales.php');
?>