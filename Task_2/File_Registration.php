<?php
include ('Control/myRegistrationForm.php');
?>


<!DOCTYPE html>

<head>
    
    <title>Registration Page</title> 
</head>
<body>
    <h1>Registration Form</h1> <hr/>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="name">Full Name: </label></td>
                <td><input type="text" name="name"> <?php echo $validatename; ?> </td>
            </tr>
                                 
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email" name="email"><?php echo $validateemail; ?></td>
            </tr>
                       
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="password"><?php echo $validatepassword; ?></td>
            </tr>          
           
            <tr>
                <td><label for="Comment">Comment:</label></td>
                <td><textarea id="cmnt1" name="comment" rows="4" cols="40">
                </textarea>
                <?php echo $validatecomment; ?> </td>
            </tr>
                      
            <tr>
                <td><label for="gender">Gender: </label></td>
                <td>
                <input type="radio" id="male" name="gender" value="male"> Male 
                <input type="radio" id="female" name="gender" value="female"> Female 
                <input type="radio" id="others" name="gender" value="others"> Others 
                <?php echo $validateradio; ?></td>
            </tr>  
                      
            <tr>
               
                <td><label for="hobby"> Please Choose a hobby: </label></td>
                <td>
                <input type="checkbox" id="singing1" name="hobby1" value="Singing">
                <label for="hobby1"> Singing </label>
                <input type="checkbox" id="dancing2" name="hobby2" value="Dancing">
                <label for="hobby2"> Dancing </label>
                <input type="checkbox" id="reading3" name="hobby3" value="Reading">
                <label for="hobby3"> Reading </label>
                <?php echo $validatecheckbox; ?></td>       
            </tr>
                     
            <tr>
               <td><label for="hobby">Please Choose a File: </label></td>
               <td><input type="file" id="myfile" name="myfile"></td>
              
            </tr>  
       
            <tr>
                <td>
                <input type="submit" value="Submit">
                <input type="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>