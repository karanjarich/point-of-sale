<!-- Edit -->
<div class="modal fade" id="pay_<?php echo $row['sales_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-green">
			    <center><h4 class="modal-title" id="myModalLabel">Cash In</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_payments.php">
				<input type="hidden" class="form-control" name="sales_no" value="<?php echo $row['sales_no']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Paid By:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="customer_no" value="<?php echo $row['customer_no']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Order Amount:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="amount" value="<?php echo $row['total_amount']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Amount Paid:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="amount" value="<?php echo $row['paid_amount']; ?>">
					</div>
				</div>
				<div class="row form-group" id="result1">
					<div class="col-sm-2">
						<label class="control-label modal-label">Balance:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="amount" value="<?php echo $row['balance']; ?>">
					</div>
				</div>
				<div id="results">
				
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Paying:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="amount">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Mode:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mode" value="<?php echo $row['mode']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="datee" value="<?php echo $row['datee']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- Pay -->
<div class="modal fade" id="pa_<?php echo $row['sales_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-green">
			    <center><h4 class="modal-title" id="myModalLabel">Add Payments</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="increase_payments.php">
				<input type="hidden" class="form-control" name="sales_no" value="<?php echo $row['sales_no']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">customer_no:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="customer_no" value="<?php echo $row['customer_no']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Amount Paid:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="amt" value="<?php echo $row['amount']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Paid For:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="paid" value="<?php echo $row['paid']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Amount Paid Now:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="lt_amt">
					</div>
				</div>
				<div class="row form-group">
                    <div class="col-md-2">
                       <label class="control-label modal-label">Payment Mode:</label>
                    </div>
                    <div class="col-md-10">
                        <select class="form-control" name="mode">
                         <option>MPESA</option>
                         <option>CHEQUE</option>
                         <option>CASH</option>
                         <option>CREDIT</option>
                         </select>
                    </div>
                </div>
					
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="datee" value="<?php echo $row['datee']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- End Pay -->
<!-- Delete -->
