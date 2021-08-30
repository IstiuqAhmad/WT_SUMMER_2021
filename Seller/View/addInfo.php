<?php
session_start(); 

include ("../control/addInfocheck.php");


if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
   
<link rel="stylesheet" type="text/css" href="../css/addInfo.css">
<body>
<div>
<h2>Add Bus Info</h2>


<?php echo $error; ?>

<form action="" method="post"  enctype="multipart/form-data">
Counter Name: 
<input type="text" name="pname"><br><br>
Bus Type: 
<input type="radio" id="ac" name="pdesc" value="Ac">
<label for="ac">Ac</label>
<input type="radio" id="nonac" name="pdesc" value="NonAc">
<label for="nonac">Non Ac</label><br><br>
Bus Schedule: 
<input type="date" id="dob" name="pcategory"> <br> <br>
Ticket Price: 
<input type="number" name="pprice"><br><br>

<br>
<input type="reset">
<input type="submit" name="add" value="ADD BUS">
</form>
<h5> <a href="welcome.php">GO back</a></h5>

<?php echo $successfulAdd; ?>
    <?php echo $errorAdd; ?>
</div>

</body>
</html>