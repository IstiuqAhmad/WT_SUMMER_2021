<!DOCTYPE html>
<html>
<body>

<h3 id="demo">Press Button for Read Info </h3>

<button type="button" onclick="MyAjaxFunc()">Read Info</button>
<br>
<br>
<a href="../View/welcome.php">Back</a>  
 
<script>
function MyAjaxFunc() {

  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("demo").innerHTML = this.status;
	}
  };
  xhttp.open("GET","/Seller/Ajax/myfile.txt", true);
 
  xhttp.send();
}
</script>

</body>
</html>