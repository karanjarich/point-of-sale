<?php
	session_start();
	include_once('connection_data.php');

	if(isset($_POST['add'])){  
		$username = $_POST['username'];
		$password = $_POST['password'];
		$status = $_POST['status'];
		$user_location = $_POST['user_location'];
		$user_email = $_POST['user_email'];
		$sql = "INSERT INTO user(username`, `password`, `status) VALUES ('$username',$password','$status')";
      
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'user added successfully';
			 
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
   header('location:user.php');
?>