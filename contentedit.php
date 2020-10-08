<!DOCTYPE html>
<html>
<body>
    <head>
       <script>
       <script src="out.js"></script>
       </script>
    </head>
    <table cellspacing="1" style="width:400px; height: 15px; border-size: 1px; border-color: #FF9966;">
        <head>
            <tr>
                <th style="width:100px; height: 15px; border-size: 1px; border-color: #FF9966;">Id</th>
                <th style="width:100px; height: 15px; border-size: 1px; border-color: #FF9966;">Product</th>
                <th style="width:100px; height: 15px; border-size: 1px; border-color: #FF9966;">Price</th>
                <th style="width:00px; height: 15px; border-size: 1px; border-color: #FF9966;">Sum</th>
            </tr>
        </head>
         <tbody>
         <tr> <th><input type="text" id="testedit"contenteditable="true" onblur="longdate()"></th>
        <th><input type="text" id="product"contenteditable="true" onblur="prod()"></th>
        <th><input type="text" id="price"contenteditable="true" onblur="longdate()"></th>
        <th ><input type="text" id="sum"contenteditable="true" onblur="longdate()"></th>
        </tr>
   </tbody>
 </table>
</body>
<script>
function longdate() {
var summation =  document.getElementById("product").value* document.getElementById("price").value
         document.getElementById("sum").value=summation;
}
</script>
</html>
