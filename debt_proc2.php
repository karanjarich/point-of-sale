<?php
  include_once('connection_data.php');
$search=$_POST['search'];
$su=0;
      ?>
        <div class="container">
        <!-- DataTables Example -->

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <h3 class="text-center">Customer Statement</h3>
                       <h4 class="text-center"><?php echo $search;?></h4>
                        <th>Transaction No</th>
                        <th>Transaction Date</th>
                        <th>Customer</th>
						<th>Purchases</th>
						<th>Paid</th>
						<th>Balance</th>
						
                    </thead>
                <tbody>
                        <?php
                    $s="debtors";
                     
				           $sql = "SELECT `transaction_no`, `ref_no`, `debit` tendered, `credit` paid, `account_no` customer, `transact_date`, `description`, `account_category`, `generated_from` FROM `transactions` wHERE account_category='$s' and account_no='$search' ";
                          
                             $s="debtors";
				           $sum= "SELECT sum(`debit`) tendered,sum(`credit`) paid FROM `transactions` WHERE account_category= '$s' and account_no='$search'";
                           $quer = $conn->query($sum);
                         
                            while($row = $quer->fetch_assoc()){
                                $su=(int)$row['tendered']-(int)$row['paid'];
                            }
							
                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                $balance=(int)$row['tendered']-(int)$row['paid'];
                                echo 
								"<tr>
                                    <td>".$row['transaction_no']."</td>
                                    <td>".$row['transact_date']."</td>
									<td>".$row['customer']."</td>
									<td>".$row['tendered']."</td>
									<td>".$row['paid']."</td>
								    <td>".$balance."</td>
				            	</tr>";
                            }
								//include('cust_payments.php');
                       
					     echo "<tr><td colspan=\"5\">Balance</td>
                               <td>$su</td>
                         </tr>
						</tbody>"				
				?>
               </table>
            </div>

</div>
