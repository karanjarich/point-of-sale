<script >
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script> 
  <?php include'admin_nav.php';
       include'connection_data.php';
       include'bus_cus_filter.php';
       $datee=date('Y-m-d');
       $refno=null;
	   $sql= "SELECT * FROM `codes`";
     //use for MySQLi OOP
     $sql = $conn->query($sql);
       while($row =$sql->fetch_assoc()){
         $refno=(int)$row['lastfigure']+1;
                      }
         $sql1="UPDATE codes SET lastfigure = $refno WHERE codesid= 1 "; 
      	if($conn->query($sql1)){
			$_SESSION['success'] = 'codes updated successfully';
			}
			
		else{
			echo $php_errormsg;
		}
   
      // filter customers
     // $sql= "SELECT * FROM `customers`";
     //  $sql = $conn->query($sql);
     //  while($row =$sql->fetch_assoc()){
       //  $refno=(int)$row['lastfigure']+1;
                    //  }    
        //

    ?>
    
      
    <div id="printDiv">

      <div class="container">
	    <!-- DataTables Example -->
          	<form method="POST" style="padding:5%"action="">
                   <div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label modal-label">Customer Name:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control"  id="cst_name" name="cst_name" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label modal-label">Receipt Number:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" readonly  id="bill_no" name="bill_no" value="<?php echo $refno;?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label modal-label">Balance:</label>
					</div>
					<div class="col-sm-8">
						<input type="number" class="form-control" name="amount"  id="balance"required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label modal-label">Amount:</label>
					</div>
					<div class="col-sm-8">
						<input type="number" class="form-control" name="amount"  id="amount"required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label modal-label">Date Paid</label>
					</div>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="datee" name="datee" >
					</div>
				</div>
				   <div class="row form-group">
                    <div class="col-sm-4">

                        <label class="control-label modal-label">Payment Mode:</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-control" name="mode">
                         <option>MPESA</option>
                         <option>CHEQUE</option>
                         <option>CASH</option>
                        </select>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="control-label modal-label">Paid for:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="refno" id="description" required="required" placeholder="Kindly enter number for example bill number or invoice">
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-12">
					  <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" id="add" class="btn btn-primary btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Save</a>
				</div>
                </div>
            </div> 
			</div>
     
			</form> 
    	  <div class="row form-group">
							  <div class="col-md-8">
								<input type="hidden" class="form-control fc" name="head1" id="head1" value="GulfMAX Nuetral Care Ltd" required>
								<input type="hidden" class="form-control fc" name="head2" id="head2" value="Cash Sales" required>
								<input type="hidden" class="form-control fc" name="head3" id="head3" value="Po Box 1123421" required>
								<input type="hidden" class="form-control fc" name="head4" id="head4" value="072432432432" required>
							</div>
						</div>      
</div>
</div>
	  <?php include "main_footer.php";?>
	 
	 <script>
          var total_amount =document.getElementById('amount').innerHTML;
          var credit="";
          var debit="";
          var action=""; 
          var account_category="";
          var account_no="";
          var ref_no = $('#refno').val();
		  var transact_date = $('#transact_date').val();
          var description= $('#description').val();
           var customer_key="";
         
	   $(document).ready(function(){
        //  grab_increment();
        $('#cst_name').blur(function(){
                var search = $('#cst_name').val();
                if(search != '')
                {
                     $.ajax({
                          url:"search_customer.php",
                          method:"POST",
                          data:{search:search,action:action},
                          dataType:"Text",
                          success:function(data)
                          {
                             customer_key=search;
                             console.log("saved");
                          }
                     });
                }

           });
      $('#add').click(function(){
                post_credit();
                post_debit();
		        post_register();
                
           });
    // cash register
		   
		function post_register(){
                var tot= $('#amount').val();
                var transact_date = $('#datee').val();
                var description = $('#description').val() + $('#bill_no').val();
               	var category="Cash in";
                credit=tot;
                    $.ajax({
                        url:"classes/register_save.php",
                        method:"POST",
                         data:{description:description,category:category, amount:amount},
                          dataType:"Text",
                          success:function(data)
                          {
                             //$('#results').html(data);  // this works
                            
                            // document.getElementById('total_amount').value=data;
                          }
                     });
           }
   /// write a code to populate above total   
		   
    //end post to cash register   
	    function post_credit(){
                var tot= $('#amount').val();
                var transact_date = $('#datee').val();
                var description = $('#description').val();
                var ref_no = $('#bill_no').val();
                account_no= $('#cst_name').val(); 
				account_category="debtors";
                credit=tot;
                    $.ajax({
                        url:"classes/transaction_save.php",
                        method:"POST",
                         data:{ref_no:ref_no,debit:debit,credit:credit,account_no:account_no,transact_date:transact_date,description:description,account_category:account_category},
                          dataType:"Text",
                          success:function(data)
                          {
                             //$('#results').html(data);  // this works
                            
                            // document.getElementById('total_amount').value=data;
                          }
                     });
           }
   /// write a code to populate above total
   /// grab and increment 

     function post_debit(){
               var total = $('#amount').val();
                var transact_date = $('#datee').val();
                var description = $('#description').val();
                var ref_no = $('#bill_no').val();
				var account_category="";        
					account_no="cash";
                    account_category="assets";
                    debit=total;
                 
                 $.ajax({
                        url:"classes/transaction_save.php",
                        method:"POST",
                         data:{ref_no:ref_no,debit:debit,credit:credit,account_no:account_no,transact_date:transact_date,description:description,account_category:account_category},
                          dataType:"Text",
                          success:function(data)
                          {
                              console.log("test"); 
                             //$('#results').html(data);  // this works
                             
                            // document.getElementById('total_amount').value=data;
                          }
                         });
     }
});
        
       
 </script>