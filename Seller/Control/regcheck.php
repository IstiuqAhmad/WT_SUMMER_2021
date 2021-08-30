<?php
        include '../model/DbAction.php';

        $firstName = $lastName = $dob = $gender = $company = $address = $phone = $email =
        $userName = $password = "";

        $firstNameErr = $lastNameErr = $dobErr = $genderErr = $companyErr = $addErr = $emailErr =$phoneErr = $userNameErr = $passwordErr = "";

        $flag = false;
        $successfulMessage = $errorMessage = "";

        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $dob = $_POST['dob'];
            $gender = isset($_POST['gender']) ? $_POST['gender']:"";
            $company = $_POST['company'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];


            if(empty($firstName)) {
                $firstNameErr = "Field can not be empty";
                $flag = true;
            }

            if(empty($lastName)) {
                $lastNameErr = "Field can not be empty";
                $flag = true;
            }

            if(empty($dob)) {
                $dobErr = "Field can not be empty";
                $flag = true;
            }

            if(empty($gender)) {
                $genderErr = "please select your gender";
                $flag = true;
            }

            if(empty($company)) {
                $companyErr = "please select your religion";
                $flag = true;
            }

            if(empty($address)) {
                $addErr = "please select your address";
                $flag = true;
            }

            if(empty($phone)) {
                $phoneErr = "Field can not be empty";
                $flag = true;
            }


            if(empty($email)) {
                $emailErr = "Field can not be empty";
                $flag = true;
            }

            if(empty($userName)) {
                $userNameErr = "Field can not be empty";
                $flag = true;
            }
            else{

                if(strlen($userName)>8) {
                    $userNameErr = "username maximum 8 characters";
                    $flag = true;
                }

                elseif(strlen($userName)<3) {
                    $userNameErr = "username minimum 3 characters";
                    $flag = true;
                }

            }


            if(empty($password)) {
                $passwordErr = "Field can not be empty";
                $flag = true;
            }

            else{

                if(strlen($password)>8) {
                    $passwordErr = "password maximum 8 characters";
                    $flag = true;
                }
                elseif(strlen($password)<4) {
                    $passwordErr = "password minimum 4 characters";
                    $flag = true;
                }

            }

            if(!$flag) {
                
                $res = register($firstName, $lastName, $dob, $gender, $company, $address, $phone, $email, $userName ,$password);
                if($res) {
                    $successfulMessage = "Sucessfully Registered.";
                }
                else {
                    $errorMessage = "Error! while Registering.";
                }

                }

                
            }

    ?>