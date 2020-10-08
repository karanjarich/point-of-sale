<?php
  include_once('connection_data.php');
      ?>
        <div class="container">
        <!-- DataTables Example -->

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <h3 class="text-center">Customers Debts</h3>
                        <th>Customer</th>
						<th>Purchases</th>
						<th>Paid</th>
						<th>Balance</th>
						<th>Action</th>
                    </thead>
                <tbody>
                        <?php
                    $s="debtors";
				           $sql = "SELECT `account_no` customer,sum(`debit`) tendered,sum(`credit`) paid FROM `transactions` WHERE account_category= '$s' GROUP by account_no";
							
                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                $balance=(int)$row['tendered']-(int)$row['paid'];
                                echo 
								"<tr>
									<td>".$row['customer']."</td>
									<td>".$row['tendered']."</td>
									<td>".$row['paid']."</td>
								    <td>".$balance."</td>
									<td class='act'>
									 <a href='#stock_".$row['customer']."' class='btn btn-warning btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Pay</a>
									 </td>
								</tr>";
								//include('cust_payments.php');
                            ?>
                     </tbody>
                     <?php }  
					   
										
				?>
               </table>
            </div>

</div>
