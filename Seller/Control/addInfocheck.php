<?php
include('../model/db.php');

$error="";
$successfulAdd = $errorAdd = "";

if(isset($_POST['add']))
{
    if (empty($_POST['pname']) || empty($_POST['pdesc'])|| empty($_POST['pcategory'])|| empty($_POST['pprice'])) 
    {
        $error = "Input given is invalid";
    }
    else
        {

        $connection = new db();
        $conobj=$connection->OpenCon();
        //$target_destination="../file/".$_FILES['pimage']['name'];
        
        $userQuery=$connection->AddInfo($conobj,"product",$_POST['pname'],$_POST['pdesc'],$_POST['pcategory'],$_POST["pprice"]);
        if($userQuery==TRUE)
        {
            //if (move_uploaded_file($_FILES["pimage"]["tmp_name"],  $target_destination)) {
                $successfulAdd ="Upload done";
           // } else {
                //echo "Sorry, there was an error uploading your file.";
           // }
        }
        else
        {
            $errorAdd="Could not update";    
        }
        $connection->CloseCon($conobj);
        
    }
}


?>