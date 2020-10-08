  <?php include'admin_nav.php';
	   include'connection_data.php';
	   $datee=date('Y-m-d');
	   $sql_sales = "INSERT INTO sales(`sales_date`) VALUES ('$datee')";
     //use for MySQLi OOP
	   if($conn->query($sql_sales)){
			 $last_id = $conn->insert_id;
			$_SESSION['success'] = 'sales_no added successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	?>

    <div id="content-wrapper">

   <div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="row" style="margin-top:10px">
			    
				<div class="col-md-4">
				<div class="row form-group">
					<div class="col-md-4">
						<label class="control-label modal-label">Product</label>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" id="product_no" name="product_no" placeholder="please enter product code or name"required>
						
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label class="control-label modal-label">Quantity:</label>
					</div>
					<div class="col-md-8">
						<input type="text" class="form-control" id="quantity" name="quantity"  required>
					</div>
				</div>
				
			
				</div>
				<div class="col-md-4">
				<div class="row form-group" id="results">
					<div class="col-md-5">
						<label class="control-label modal-label">Product Name</label>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" id="product_name" style="text-align:right" name="product_name">
						
					</div>
					
				</div><div class="row form-group" id="results">
					<div class="col-md-5">
						<label class="control-label modal-label">Price</label>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" id="price" style="text-align:right" name="Price">
						
					</div>
					
				</div>
			      					
            </div> 
			<div class="col-md-4">
		      	<div class="row form-group">
					 <div class="col-md-12">
						 <button type="button" id="add" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Add</button>
               		</div>
				</div>
				
            </div> 
			
			<div class="col-md-4">
			<div class="row form-group" id="results">
			</div>
            </div> 
			</div>
						</div>
			</div>
      <div class="col-md-12" style="margin-top:10px; background-color:#16f74926" >
			<div class="row">
			   <div class="col-md-12" id="sales_product">
			   <center><h6>Stock In</h6></center>
				 <hr>
				</div>
		    </div>
		</div>
		
	</div>
</div>
</div>
 <?php include "main_footer.php";?>
	<script>  
      $(document).ready(function(){  
           $('#product_no').keyup(function(){  
                var found = $('#product_no').val();  
                if(found != '')  
                {  
                     $.ajax({  
                          url:"search_product.php",  
                          method:"POST",  
                          data:{found:found},
						  dataType:"Text",
                          success:function(data)  
                          {  
                             //$('#results').html(data);  // this works
							 document.getElementById('product_name').value=data;
                          }  
                     });  
                }  
 
           });
	
	
	function DisplayData(){
		var sales = $("#sales").val(); 
		$.ajax({  
                          url:"sales_save.php",  
                          method:"POST",  
                          data:{sales:sales},
						  dataType:"Text",
						  async:false,
                          success:function(data)  
                          {  
                             $('#sales_product').html(data);  // this works
							 //alert(sales);
							  }  
                     });  
	}
		 $("#add").click(function(){
						var product_no = $("#product_no").val();  
						var quantity = $("#quantity").val(); 
						var price = $("#price").val();
						var sales = $("#sales").val(); 
						var id=sales+product_no;
						// Returns successful data submission message when the entered information is stored in database.
					//	var dataString :{ product_no: product_no,quantity:quantity ,sales:sales,price: price};
						if(product_no==''||quantity==''||sales==''||price==''||id=='')
						{
						   alert("Please Fill All Fields");
						}
						else
						{
						// AJAX Code To Submit Form.
						$.ajax({
						type: "POST",
						url: "stockin_save.php",
						data:{ product_no: product_no,quantity:quantity ,sales:sales,price: price,id:id},
						cache: false,
						success: function(result){
							//retrieve the data that has been saved in the database bearing the sales number
							  $("#product_no").val('');
							  $("#quantity").val(''); 
						      $("#price").val('');
							   DisplayData();
						  	}
						});
						}
						return false;
						});	  
		});  
		          
 </script>
