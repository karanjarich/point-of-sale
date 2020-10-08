<?php
	session_start();
	include_once('connection_data.php');
    $determiner=null;
	if(isset($_POST['add'])){  
		$customer_name = $_POST['customer_name'];
		$customer_phone = $_POST['customer_phone'];
		$customers_no = $_POST['customer_phone'];
		$customer_location = $_POST['customer_location'];
		$customer_address = $_POST['customer_address'];
		$customer_email = $_POST['customer_email'];
		$sql = "INSERT INTO customers(`customer_no`,`customer_phone`,`customer_location`,`customer_name`,`customer_address`,`customer_email`) VALUES ('$customers_no','$customer_phone','$customer_location','$customer_name','$customer_address','$customer_email')";
      
		//use for MySQLi OOP
		if($conn->query($sql)){
			echo 'customers added successfully';
			 
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn',' $sql)){
		// 	$_SESSION['success'] = 'customers added successfully';
		// }
		//////////////
		
		else{
			echo 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	if($determiner==null){
		   header('location:customers.php');
	}else{
          
    }
      
?>