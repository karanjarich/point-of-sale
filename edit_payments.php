<?php
	session_start();
	include_once('connection_data.php');
    if(isset($_POST['edit'])){
		$payid=$_POST['payid'];
		$receipient = $_POST['receipient'];
		$amount = $_POST['amount'];
		$paid=$_POST['paid'];
		$biil=$_POST['biil'];
		$mode = $_POST['mode'];
		$datee=$_POST['datee'];
		$sql = "UPDATE payments SET amount= '$amount',receipient='$receipient',mode= '$mode',paid= '$paid',datee= '$datee',biil= '$biil' WHERE payid= '$payid'";
             	//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'payments updated successfully';
			}
			
		else{
			$_SESSION['error'] = 'Something went wrong in updating payments';
		}
	}
	else{
		$_SESSION['error'] = 'Select payments to edit first';
	}
    header('location:payments.php');
  ?>