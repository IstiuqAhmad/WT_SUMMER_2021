<?php
include('../model/db.php');

$user = $_POST['uname'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUserByUname($conobj,"users",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><tr><th>Username</th><th>Name</th><th>Email</th><th>Address</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["username"]."</td><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No data founds";
  }
}
else{
  echo "*Please enter something";
}