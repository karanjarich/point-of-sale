<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
			     <center><h4 class="modal-title" id="myModalLabel" style="limegreen">Add New</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="products_save.php">
                   <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Productname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="products_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product_no">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Reorder Level:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="reorder_level" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Products Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name=" products_description">
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