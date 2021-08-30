<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }


 function AddInfo($conn,$table,$pname,$pdesc,$pcategory,$pprice)
 {
$result = $conn->query("INSERT INTO $table VALUES('','$pname','$pdesc','$pcategory',$pprice)");
 return $result;
 }



 function ShowAllInfo($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function ShowOneInfo($conn,$table,$pname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE p_name='$pname'");
 return $result;
 }

 function GetUserByUname($conn,$table,$uname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE username='$uname'");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$gender,$dob)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email', gender='$gender',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>