<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
			     <center><h4 class="modal-title" id="myModalLabel" style="limegreen">Add Business Details</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="business_proc.php">
                   <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Business name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="businessname" placeholder="Enter businessname" required=" required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Registration Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="businessRegistration" placeholder="Enter Registration Number "required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Pin:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="pin" placeholder="Enter pin "required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Location:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="location" placeholder="Enter Location" required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" placeholder="Enter contact" required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" placeholder="Enter email" required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Website:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="website" placeholder="Enter website" required="required">
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