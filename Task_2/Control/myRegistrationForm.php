<?php
$validatename="";
$validateemail="";
$validatepassword="";
$validatecomment="";
$validatecheckbox="";
$validateradio="";
$h1=$h2=$h3="";
$name=$email=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];

if(empty($_REQUEST["name"]) || (strlen($_REQUEST["name"])<6))
{
    $validatename= "Please enter your name";
}
else
{
    $validatename=$_REQUEST["name"];
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail= " Please enter email address";
}
else{
    $validateemail= "Email is ".$email;
}
if(empty($_REQUEST["password"]) || (strlen($_REQUEST["password"])<6))
{
    $validatepassword= " Password Required";

}
else
{
    $validatepassword=$_REQUEST["password"];
}

if(empty($_REQUEST["cmnt1"]) || (strlen($_REQUEST["cmnt1"])<10))
{
    $validatecomment= " Please Give comment";

}
else
{
    $validatecomment=$_REQUEST["cmnt1"];
}

if(!isset($_REQUEST["hobby1"])&&!isset($_REQUEST["hobby2"])&&!isset($_REQUEST["hobby3"]))
{
    $validatecheckbox = " Select at least one hobby";    
}
else{
   if(isset($_REQUEST["hobby1"]))
   {
       $h1= $_REQUEST["hobby1"];
   }
   if(isset($_REQUEST["hobby2"]))
   { 
       $h2= $_REQUEST["hobby2"];
   }
   if(isset($_REQUEST["hobby3"]))
   {
       $h3= $_REQUEST["hobby3"];
   }
}
if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= " Please select your gender";
}

}
?>