<!-- Add New -->
<?php 
include_once('connection_data.php');
													
?>
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
			     <center><h4 class="modal-title" id="myModalLabel" style="limegreen">Pay</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="payments_save.php">
                   <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Receipient Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="receipient" required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2 col-md-2">
						<label class="control-label modal-label">Bill Number:</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" name="bill_no" placeholder="please enter bill number if any">
					</div>
				
					<div class="col-sm-2 col-md-2">
						<label class="control-label modal-label">Total Billed:</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="number" class="form-control" name="bill" id="bill" required="required" placeholder="Enter the total amount of the bill">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2 col-md-2">
						<label class="control-label modal-label">Amount:</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="number" class="form-control" name="amount"   onkeyup="calc();" id="amount"required="required">
					</div>
				
					<div class="col-sm-2 col-md-2">
						<label class="control-label modal-label">Balance</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" name="balance" id="balance" required="required" readonly="true">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date Paid</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="datee" >
					</div>
				</div>
				   <div class="row form-group">
                    <div class="col-sm-2">

                        <label class="control-label modal-label">Payment Mode:</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="form-control" name="mode">
                         <option>MPESA</option>
                         <option>CHEQUE</option>
                         <option>CASH</option>
                        </select>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Paid for:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="refno" id="t" required="required" placeholder="Kindly enter number for example bill number or invoice">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
	function calc(){
		  var bill = document.getElementById("bill").value;
          var amount =document.getElementById("amount").value;
		  var balance =bill-amount;
		  // console.log(bal);
		   document.getElementById("balance").value=balance;
		  	}
	 ///  debit post
	    function post_debit(){
                var sales = $('#sales').val();
				var sales_date = $('#sales_date').val();
                var total = $('#total_amount').val();
				var paid = $('#paid_amount').val();
				var phone = $('#c_phone').val();
                var account_category="";
                var account_no="";
				var customer = $('#customer').val();
                var diff=paid-total
				if (diff>-1)// paid by cash
				{
					account_no="cash";
                    account_category="assets";
                    debit=paid;
                    }
                else// paid nothing
				{
				    account_no=phone;
                    account_category="debtors";
                    debit=total;
                    credit=paid;
                    
                }
                 $.ajax({
                        url:"classes/transaction_save.php",
                          method:"POST",
                         data:{ref_no:ref_no,debit:debit,credit:credit,account_no:account_no,transact_date:transact_date,description:description,account_category:account_category},
                          dataType:"Text",
                          success:function(data)
                          {
                             //$('#results').html(data);  // this works
                            console.log(data);
                            // document.getElementById('total_amount').value=data;
                          }
                     });
                
           }
           ///end of coding
           ///  post credit
	    function post_credit(){
          var total = $('#total_amount').val();
		  var paid = $('#paid_amount').val();
		  var phone = $('#c_phone').val();
          debit=0;
         
          
		  if (paid>=total)// paid by cash
				{
					account_no="sales";
                    account_category="revenue";
                    credit=total;
                   
                }
                else// paid by nothing
				{
                    account_no="sales";
                    account_category="revenue";
                    credit=total;
            }
               
                     $.ajax({
                         
                          url:"classes/transaction_save.php",
                          method:"POST",
                          data:{ref_no:ref_no,debit:debit,credit:credit,account_no:account_no,transact_date:transact_date,description:description,account_category:account_category},
                          dataType:"Text",
                          success:function(data)
                          {
                             //$('#results').html(data);  // this works
                             console.log(data);
                            // document.getElementById('total_amount').value=data;
                          }
                     });
               

           }
   /// write a code to populate above total
</script>