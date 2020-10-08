<?php
	session_start();
	include_once('connection_data.php');

	if(isset($_GET['userid'])){
		$sql = "DELETE FROM user WHERE userid = '".$_GET['userid']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'user deleted successfully';
			
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting user';
		}
	}
	else{
		$_SESSION['error'] = 'Select user to delete first';
	}
     
	header('location:users.php');
?>