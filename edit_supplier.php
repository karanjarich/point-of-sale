<?php
	session_start();
	include_once('connection_data.php');

	if(isset($_POST['edit'])){
		$suppliers_no = $_POST['suppliers_no'];
		$suppliers_name = $_POST['suppliers_name'];
		$suppliers_location = $_POST['suppliers_location'];
		$suppliers_phone=$_POST['suppliers_phone'];
		$suppliers_email = $_POST['suppliers_email'];
		$sql = "UPDATE suppliers SET suppliers_name= '$suppliers_name',suppliers_phone= '$suppliers_phone',suppliers_location= '$suppliers_location',suppliers_email= '$suppliers_email' WHERE suppliers_no= '$suppliers_no'";
             	//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'suppliers updated successfully';
			}
			
		else{
			$_SESSION['error'] = 'Something went wrong in updating suppliers';
		}
	}
	else{
		$_SESSION['error'] = 'Select suppliers to edit first';
	}
   header('location:suppliers.php');

?>