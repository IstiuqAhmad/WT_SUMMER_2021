<?php

include('../Control/regcheck.php');
//include('../Control/json.php');


if(isset($_SESSION['firstname'])){
    header("location: home.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/regcss.css">
    <script src="..\JS\registration.js"></script>
</head>
<body>
    <h1>Seller Registration Form</h1>

    <form action=" " method="POST" name="registrationForm" onsubmit="return isValid();">

        <table>

            <tr>
            <td> <label for="firstName">First Name: </label> </td>
            <td><input type="text" id="firstName" name="firstName" placeholder="Enter Last Name"> <?php echo $firstNameErr; ?> </td> <td><p id="firstNameErr"> </p></td>
            </tr>

            <tr>
            <td> <label for="lastName">Last Name: </label> </td>
            <td>  <input type="text" id="lastName" name="lastName" placeholder="Enter Last Name"> <?php echo $lastNameErr; ?> </td> <td> <p id="lastNameErr"> </p> </td>
            </tr>

            <tr>
            <td>
            <label>Gender:</label> </td>
            <td>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="others" name="gender" value="others">
            <label for="others">Others</label> <?php echo $genderErr; ?> </td> <td>  <p id="genderErr"> </p> </td>
            </tr>
             
            <tr>  
            <td> <label for="dob">DOB:</label> </td>
            <td> <input type="date" id="dob" name="dob">
            </td> <?php echo $dobErr; ?> <td> <p id="dobErr"> </p> </td>
            </tr>

            <tr>
            <td>  <label for="company">Company:</label> </td> 
            <td>
            <select id="company" name="company">
                <option value="">Select Company</option>
                <option value="greenline">Green Line</option>
                <option value="silkline">Silk Line</option>
                <option value="hanif">Hanif</option>
                <option value="ena">Ena</option>
            </select>
            <?php echo $companyErr; ?> </td> <td> <p id="companyErr"> </p> </td>
            <tr>

            <tr> 
            <td> <label for="phone">Phone:</label> </td>
            <td>
            <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number"> </td>
            <?php echo $phoneErr; ?> </td> <td> <p id="phoneErr"> </p></td>
            </tr> 
             
            <tr>
            <td><label for="email">Email:</label> </td>
            <td>
            <input type="email" id="email" name="email" placeholder="Enter Email">
            <?php echo $emailErr; ?> </td> <td> <p id="emailErr"> </p></td>
            </tr>

            <tr>      
            <td><label for="address">Address:</label> </td>
            <td>
            <textarea id="address" name="address" rows="4" cols="30"placeholder="Write your address.."></textarea> <?php echo $addErr; ?></td> <td> <p id="addErr"></p> </td>
            </tr>


            <tr>
                <td>
            <label for="userName">Username:</label> </td>
            <td>
            <input type="text" id="userName" name="userName" placeholder="Enter User Name">
            <?php echo $userNameErr; ?> <td> <p id="userNameErr"> </p> </td>
            </tr>

            <tr>
            <td>
            <label for="password">Password:</label> </td>
            <td>
            <input type="password" id="password" name="password" placeholder="Enter Password">
            <?php echo $passwordErr; ?> </td> <td> <p id="passwordErr"> </p> </td>
           </tr>

            <tr>
            <td>  <input type= "reset"> </td>
            <td> <input type="submit" name="submit" value="Register"> </td>
            </tr>
    
         </table>
    </form>

    <br>

    <?php echo $successfulMessage; ?>
    <?php echo $errorMessage; ?>

    If you already register, <a href="login.php">Click to Login</a>

</body>
</html>