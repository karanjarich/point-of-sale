<?php
	session_start();
	$determiner=null;
	include_once('connection_data.php');
	if(isset($_POST['edit'])){
		$customers_no = $_POST['customers_no'];
		$customer_name = $_POST['customer_name'];
		$customer_location = $_POST['customer_location'];
		$customer_phone=$_POST['customer_phone'];
		$customer_address = $_POST['customer_address'];
		//$customer_email = $_POST['customer_email'];
		$sql = "UPDATE customers SET customer_name= '$customer_name',customer_phone= '$customer_phone',customer_location= '$customer_location',customer_address= '$customer_address' WHERE customer_no= '$customers_no'";
             	//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer updated successfully';
		}
			
		else{
			$_SESSION['error'] = 'Something went wrong in updating Customer';
		}
	}
	else{
		$_SESSION['error'] = 'Select Customer to edit first';
	}
	if($determiner==null){
		   header('location:customers.php');
	}else{
          
    }
?>