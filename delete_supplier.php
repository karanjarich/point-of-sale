<?php
	session_start();
	include_once('connection_data.php'); 
   
	if(isset($_GET['suppliers_no'])){
		echo $_GET['suppliers_no'];
		$sql = "DELETE FROM `suppliers` WHERE suppliers_no = '".$_GET['suppliers_no']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'suppliers deleted successfully';
			
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting suppliers';
		}
	}
	else{
		$_SESSION['error'] = 'Select suppliers to delete first';
	}
     
	header('location: suppliers.php');
?>