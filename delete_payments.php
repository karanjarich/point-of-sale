<?php
	session_start();
	include_once('connection_data.php'); 

	if(isset($_GET['payid'])){
		$sql = "DELETE FROM payments WHERE payid = '".$_GET['payid']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'payments deleted successfully';
			
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting payments';
		}
	}
	else{
		$_SESSION['error'] = 'Select products to delete first';
	}
     
	header('location:payments.php');
?>