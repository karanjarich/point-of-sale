<tr><td>
  <label for="firstName">First Name: </label></td><td>
  <input type="text" name="firstName" id="firstName" v-model="firstName"></td> </tr>
<tr><td>
 <label for="lastName">Last Name: </label></td><td>
  <input type="text" name="lastName" id="lastName" v-model="lastName"></td> </tr>
<tr><td>

<input type="button" onClick="calc()" value="Submit">
<script>
let d=[];
function calc(){
  var data = {
  firstname : document.getElementById("firstName").value,
  lastname : document.getElementById("lastName").value
  }
d.push(data);
  console.log(d);
//https://stackoverflow.com/questions/50226307/html-js-json-take-user-input-and-add-it-to-json-payload-as-an-json-object
console.log(JSON.stringify(d));
}
</script>