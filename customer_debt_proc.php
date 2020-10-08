<?php
  include_once('connection_data.php');
      ?>
        <div class="container">
        <!-- DataTables Example -->

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>

                        <th>Sales Number</th>
						<th>Sales Date</th>
					    <th>Total Amount</th>
						<th>Paid Amount</th>
						<th>Balance</th>
						<th>Status</th>
						<th>Amount</th>
                    </thead>
                <tbody>
                        <?php
							$search=$_POST['search'];
							 $sql = "SELECT `sales_no`, `sales_date`, `customer_no`, `total_amount`, `paid_amount`, `total_amount`-`paid_amount` as balance, if(DATEDIFF(now(), `sales_date`)> 7,'Late','Ok') as status FROM sales where total_amount>paid_amount and customer_no= '$search' ";

                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                echo 
								"<tr>
									<td>".$row['sales_no']."</td>
									<td>".$row['sales_date']."</td>
									<td>".$row['total_amount']."</td>
									<td>".$row['paid_amount']."</td>
									<td>".$row['balance']."</td>
									<td>".$row['status']."</td>
                                    <td id='qty' contenteditable='true' onblur='receiptUpdate(".$row['sales_no'].",".$row['total_amount'].",".$row['paid_amount'].",this)'></td>

								</tr>";

                            ?>
                     </tbody>
                     <?php }  
					   
										
				?>
               </table>
            </div>

</div>
 
<script>
    // populate the balance once entered in textbox for paid amount
		   $('#c_amount').keyup(function(){
                var search = $('#c_amount').val();
                if(search != '')
                {
                    document.getElementById('c_balance').value=document.getElementById('c_amount').value;
                }
           });
              // function to save the payment by different
            function receiptUpdate(sales_no,total_amount,paid_amount,amount_paid) {
                    	  var sales_no=sales_no;
                          var total_amount=parseInt(total_amount);
                          var paid_amount=parseInt(paid_amount);
                          var amount_paid=parseInt($(amount_paid).text());
                          var change="";
						  var total="";

                        //  var paid=document.getElementById("c_balance").value();  // generates an error that  document.getElementById() is null    //this works well
                         var paid=document.getElementById("c_balance").value;

                          if(amount_paid<paid){
                              //parseInt to avoid concentation  summating what has been added
                               paid_amount=parseInt(paid_amount)+parseInt(amount_paid);
                               change=parseInt(paid)-parseInt(amount_paid);
                               document.getElementById("c_balance").value=change;
							   total=parseInt(paid_amount);
                              
                              }
                         else
                              { //parseInt to avoid concentation &&&// summating what has been added
                               paid_amount=parseInt(paid_amount)+parseInt(paid);
                               document.getElementById("c_balance").value=0;
                               change=0;
                               total=parseInt(paid_amount);

                              }
				 $.ajax({
                          url:"increase_sales.php",
                          method:"POST",
                          data:{sales:sales,total:total},
                          dataType:"Text",
                          async:false,
                          success:function(data)
                          {
                            $('#results').html(data);  // this works
                           
                           }
                     });
							  
							  
    }
 /// begin of display
  function DisplayData(){
        var sales = $("#sales").val();
        var total = $("#total_amount").val();
        $.ajax({
                          url:"classes/sales_save.php",
                          method:"POST",
                          data:{sales:sales,total:total},
                          dataType:"Text",
                          async:false,
                          success:function(data)
                          {
                            $('#sales_product').html(data);  // this works
                            // testSum();
                               }
                     });
    }

  </script>