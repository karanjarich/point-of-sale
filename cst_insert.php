<?php
	session_start();
	include_once('connection_data.php');
   if(isset($_POST['search'])){  
		$customer_name = $_POST['cst_name'];
		$customer_phone = $_POST['search'];
		$customers_no = $_POST['search'];
		$sql = "INSERT INTO customers(`customer_no`,`customer_phone`,`customer_name`) VALUES ('$customers_no','$customer_phone','$customer_name')";
      
		//use for MySQLi OOP
		if($conn->query($sql)){
			echo 'customers added successfully';
			 
		}
				
		else{
			echo 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}  
?>

	