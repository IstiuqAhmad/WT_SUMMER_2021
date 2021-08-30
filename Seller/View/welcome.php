<?php
session_start();
if (!isset($_SESSION['username'])) {
header("Location: ../view/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../css/welcome.css">
  <script src="..\JS\ajax.js"></script>
	
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<br>
<br>

<h2> Welcome, <?php echo $_SESSION["username"];?> </h2>

<h4>Do you want to  <a href="addInfo.php"> ADD Info</a></h4>
<h4>Do you want to  <a href="showInfo.php"> Show Info</a></h4>
<h4>Update User  <a href="../Jquery/jquery.php"> Update User</a></h4>

<br> 
<a href="../Ajax/ajax.php">Need Info From Ajax?</a>

<br>
<br>
<label>Find User Details:</label>

  <input type="text" id="uname" onkeyup="showmyuser()">
  
<p id="mytext"></p>

<br>

<a href="../Control/logout.php">Logout</a>  



</body>
</html>

