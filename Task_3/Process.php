<?php   include "Registration.php" ; ?>
<?php   include "Control\myForm.php" ; ?>
<?php 

$validateradio="";
$validatecheckbox="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $validatecheckbox="";
    if(isset($_REQUEST["Dancing"]))
    {
        $v1= $_REQUEST["Dancing"];
        $validatecheckbox=$validatecheckbox.$v1;
    }
    if(isset($_REQUEST["Singing"]))
    { 
        $v2= $_REQUEST["Singing"];
        $validatecheckbox=$validatecheckbox.",".$v2;
    }
    if(isset($_REQUEST["Reading"]))
    {
     $v3= $_REQUEST["Reading"];
     $validatecheckbox=$validatecheckbox.",".$v3;
    }


if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}



$target_File="File/".$_FILES["fileupload"]["name"];

if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{
    echo "You upload a new file";
    echo "<br>".$_FILES(["fileupload"]["type"]);
    echo "<img src='".$target_File."'>";
}


}


$formdata = array(
    'Name'=> $_POST["name"],
    'Email'=> $_POST["email"],
    'Password'=>$_POST["password"],
    'Comment'=> $_POST["comment"],
    'Gender'=>"$validateradio",
    'Hobby'=>"$validatecheckbox",
    "File_Path"=>"$target_File"
   

 );


 $existingdata = file_get_contents('Info.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;

 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 

 if(file_put_contents("Info.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "No data saved";

$data = file_get_contents("Info.json");
$mydata = json_decode($data);



foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "your ".$key." is ".$value."<br>";
} 
echo "<br>";
}



?>