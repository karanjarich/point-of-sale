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
	 include_once('connection_data.php');
     include'bus_cus_filter.php';
	 $sql_users = "SELECT * FROM user";
	//use for MySQLi-OOP
	  $query = $conn->query($sql_users);
							
    ?>
    <div id="content-wrapper">

      <div class="container">
	    <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
		   <form class="form-inline">
		   <div class="form-group row col-md-4">
			  <input type="text" class="form-control" id="search" placeholder="Enter customer name" name="pwd">
			</div>
				 <div class="form-group row col-md-2">
                        <button type="button" id="btnok" class="btn btn-success" data-dismiss="modal"><span class="fas fa-print"></span>Print</button>
                    </div>		  
           </form>
				</div>
        <div id="printable"><div class="form-group row" style="border:2px solid black;">
                      <div class="col-sm-5">
                          <label class="control-form-label "><?php echo $businessname; ?></label><br>
						<label class="control-form-label "><?php echo $businessRegistration; ?></label><br>
                        <label class="control-form-label "><?php echo $contact; ?></label><br>
						<label class="control-form-label "><?php echo $email;?></label>
                        
				      </div>
                      <div class="col-sm-5">
                          <label class="control-form-label ">Monthly Sales Report</label><br>
						<label class="control-form-label "><?php echo "as at ". date('Y-m-d'); ?></label><br>
                        
                       
				      </div></div>
		
		 <div id="results">
		
		       </div>
		     </div>
			  </div>
     <?php include "main_footer.php";?>
	 
	 <script>
	$(document).ready(function(){
             $.ajax({
                          url:"debt_proc.php",
                          method:"POST",
                          
                          success:function(data)
                          {
                             $('#results').html(data);  
                             
                          }
                     });
        
		   $('#search').keyup(function(){
                var search = $('#search').val();
                
                if(search != '')
                {
                    $.ajax({
                          url:"debt_proc2.php",
                          method:"POST",
                          data:{search:search},
                          dataType:"Text",
                          success:function(data)
                          {
                             $('#results').html(data);  // this works
                             
                          }
                     });  
                }

           });
        function print_receipt()
		{
			var head1=document.getElementById('head1').value;
			var head2=document.getElementById('head2').value;
			var head3=document.getElementById('head3').value;
			var head4=document.getElementById('head4').value;
			var divToPrint = document.getElementById('dataTable');
			var htmlToPrint = '' +
				'<style type="text/css">' +
				'table,th,td {' +
				'border-collapse: collapse;'+
				'border:1px solid #000;' +
				'padding:0.5em;' +
				'color:#000;' +
				'}' 
				+
				'#dataTable tr td:last-child,thead th:last-child {' +
				'display:none;'+
				'}' +
				'</style>';
			htmlToPrint += "<b>"+head1+"</br>"+"</br>"+head2+"</br>"+"</br>"+head3+"</br>"+"</br>"+head4+"</br>"+"</br>"+divToPrint.outerHTML;
			newWin = window.open("");
			newWin.document.write(htmlToPrint);
			newWin.print();
			newWin.close();
			setTimeout(function(){newWin.close();},1000);
		}
       $('#btnok').click(function(){
		     
               printDiv('printable');
               location.reload();//https://www.w3schools.com/jsref/met_loc_reload.asp
		}); 
	   });
         
 </script>
