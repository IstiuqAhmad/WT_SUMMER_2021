<?php

    include('../Model/DbAction.php');
    $userName1 = $password1 = "";
    $userNameErr1 = $passwordErr1 = "";

    $flag = false;
    $errorMessage = "";

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $userName1 = $_POST['userName1'];
        $password1 = $_POST['password1'];

        if(empty($userName1)) {
            $userNameErr1 = "Field can not be empty";
            $flag = true;
        }

        if(empty($password1)) {
            $passwordErr1 = "Field can not be empty";
            $flag = true;
        }


        if(!$flag) {
                $res = login($userName1 ,$password1);
             
                if($res) {
                    session_start();

                    $_SESSION['username'] = $userName1;
                    header("Location: welcome.php");          

                }
                else{

                    $errorMessage = "Username or password is incorrect";
                }
            }
            
            
        }

    ?>