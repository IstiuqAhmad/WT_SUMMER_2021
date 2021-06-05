<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Registration Page</title> 
</head>
<body>
    <h1>Registration Form</h1> <hr/>
    <form>
        <table>
            <tr>
                <td><label for="name">Full Name: </label></td>
                <td><input type="text" name="FullName"></td>
            </tr>
            <br>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email"></td>
            </tr>
            <br><br>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password"></td>
            </tr>
            <br>
            <tr>
                <td><label for="Comment">Comment:</label></td>
                <td><textarea id="cmnt1" name="comment" rows="4" cols="40">
                </textarea></td>
            
            </tr>
            
            <br>
            <tr>
                <td><label for="gender">Gender : </label></td>
                <td><input type="radio" id="male" name="gender" value="male">Male</td>
                <td><input type="radio" id="female" name="gender" value="female">Female</td>
                <td><input type="radio" id="others" name="gender" value="others">Others</td>
            </tr>
          
                <br>
            <tr>
               
               <td><label for="hobby">Please Choose a hobby : </label></td>
               <td><input type="checkbox" id="singing1" name="hobby1" value="Singing"></td>
               <td><label for="hobby1">Singing</label>
               <td><input type="checkbox" id="dancing2" name="hobby2" value="Dancing"></td>
               <td><label for="hobby2">Dancing</label>
               <td><input type="checkbox" id="reading3" name="hobby3" value="Reading"></td>
               <td><label for="hobby3">Reading</label>        
            </tr>
            
            <br>
            <tr>
               <td><label for="hobby">Please Choose a File : </label></td>
               <td><input type="file" id="myfile" name="myfile"></td>
              
             
            </tr>  
            
            <br>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>