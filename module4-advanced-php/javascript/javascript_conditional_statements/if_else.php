<script type="text/javascript">
function test()
{
  var nm=document.getElementById("name").value;
//   document.write("Your name is :",nm);
document.getElementById("demo").innerHTML="Your name is :"+nm;

}

</script>
<center>
<p id="demo"></p>    
<form>
Input name :<input type="text" name="nm" id="name" placeholder="Enter Name">
<br><br>
<button type="button" onclick="test()">Check >></button>
</form>