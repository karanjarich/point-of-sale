<?php
  include_once('../connection_data.php');
  
          //Fetching Values from URL
          
          $description= $_POST['description'];
          $category= $_POST['category'];
          $amount= $_POST['amount'];
          
        //insert into sales products
       $sql="INSERT INTO `cash_register`(`description`, `category`, `amount`)
            VALUES
            ('$description','$category','$amount')";
        
       if($conn->query($sql)){
			// header('location:../products.php');
		}
				
		else{
			//header('location:../customers.php');
		}
    //  mysqli_close($conn);
    ?>
   