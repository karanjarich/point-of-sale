<?php
	session_start();
	include_once('connection_data.php'); 

	if(isset($_GET['customer_no'])){
		$sql = "DELETE FROM customers WHERE customer_no = '".$_GET['customer_no']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'customers deleted successfully';
			
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting customers';
		}
	}
	else{
		$_SESSION['error'] = 'Select customers to delete first';
	}
     
	header('location: customers.php');
?>