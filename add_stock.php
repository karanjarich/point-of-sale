<!-- Edit -->
<div class="modal fade" id="stock_<?php echo $row['product_no']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-green">
			    <center><h4 class="modal-title" id="myModalLabel">Add stock</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_stock.php">
			<input type="hidden" class="form-control" name="product_no" value="<?php echo $row['product_no']; ?>">
				
			<fieldset disabled>
                   <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Productname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" id="products_name" class="form-control" name="products_name"  value="<?php echo $row['products_name']; ?>">
					</div>
				</div>
			
				</fieldset>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Available Stock:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="units_in_stock" name="ustock" value="<?php echo $row['units_in_stock']; ?>" readonly>
					</div>
				</div>
					
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Production Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="buying" name="buying" value="<?php echo $row['buying']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Selling Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stock in:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="stock" >
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stocking Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="datee">
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
