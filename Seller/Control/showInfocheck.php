<?php

include('../model/db.php');

if(isset($_POST['showall']))
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->ShowAllInfo($conobj,"product");

    if($userQuery->num_rows > 0) {

        while($row = $userQuery->fetch_assoc()){
          
            echo " Counter Name: " .$row['P_Name'];
            echo " Schedule Time: " .$row['P_Category'];

        }
    }
    else{
        echo "0 results";
    }

}


?>