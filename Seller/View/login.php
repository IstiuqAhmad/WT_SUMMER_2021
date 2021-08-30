<?php

include('../Control/logcheck.php');

?>

<!DOCTYPE html>
<html>
<head>
     
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../css/logcss.css">
    <script src="..\JS\login.js"></script>
</head>
<body>
    <h1>Seller Login Form</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="loginForm" onsubmit="return isValid();">
     

        <label for="userName1">Username:</label> <br>
        <input type="text" id="userName1" name="userName1" placeholder="Enter User Name">
        <span id="userNameErr1"> <?php echo $userNameErr1; ?></span> <br>
         

        <label for="password1">Password:</label> 
        <input type="password" id="password1" name="password1" placeholder="Enter Password"> 
        <span id="passwordErr1"> <?php echo $passwordErr1; ?></span> 

        <br>
        <br>
        <input type="submit" name="submit" value="Login"> 
      
        
        
        </form>

        <?php echo $errorMessage; ?>

        <a href="registration.php">Click here to Register</a>

</body>
</html>