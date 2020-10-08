<?php
	session_start();
	include_once('connection_data.php');
	if(isset($_POST['add'])){ 
	    $sales_no = $_POST['sales_no'];
		$product_no = $_POST['product_no'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$sales_detailsno =$sales_no.$product_no;
	
    	$sql = "INSERT INTO sales_details(`sales_no`, `product_no`, `quantity`, `price`, `sales_detailsno`) VALUES ('$sales_no','$product_no','$quantity','$price','$sales_detailsno')";
     
		if($conn->query($sql)){
			$_SESSION['success'] = 'customers added successfully';
			}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
       //header('location:customers.php');
?>