<?php
session_start();
include ("../control/showInfocheck.php");

if (!isset($_SESSION['username'])) {
header("Location: ../view/login.php");
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/showInfo.css">
<head>
    <div>
	<h2>Show and Search</h2>
    
Show All:
<form action="" method="post">
    <input type="submit" name="showall" value="Show All">
</form>

Search:
<form action="" method="post">

<input type="text" name="pname">
<input type="submit" name="search" value="Search">

</form>
</head>
<body>
<br>	
<a href="../view/welcome.php">Back </a>
</div>
</body>
</html>