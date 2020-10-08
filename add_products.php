<!-- Add New -->
<?php 
include_once('connection_data.php');
							$sql = "SELECT * FROM product_category";
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							
?>
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
						<input type="text" class="form-control" name="products_name" placeholder="Enter product name" required=" required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Product Number:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="product_no" placeholder="Enter product code"required="required">
					</div>
				</div>
				<div class="row form-group">
                    <div class="col-md-4">

                        <label class="control-label modal-label">Product Category:</label>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control" name="mode">
                           <?php while($row = $query->fetch_assoc()){
                                echo
								
						"<option value=".$row['product_category'].">".$row['product_category']."</option>
							 
                              ";
							}?>
                         </select>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Reorder Level:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="reorder_level" placeholder="Enter Reorder Level"required="required">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Products Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name=" products_description" placeholder="Enter Products Description" required="required">
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