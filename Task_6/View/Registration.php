<!DOCTYPE html>
<html>
<head>
<script src="..\js\validation.js"></script>
<title>Registration Form </title>

</head>
<body>

    <table>
    <h1>Registration Form</h1> <hr/>
    <form action="" onsubmit = "return validateForm()" method="post">
       
            <tr>
                <td><label for="name">Full Name: </label></td>
                <td><input type="text" id="name" name="name"> <br></td> <td> <p id="errorname"> </p> </td>
            </tr>
                                 
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email" id="email" name="email"> </td> <td> <p id="errormail"> </p> </td>
            </tr>
                       
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" id="password" name="password"></td> <td> <p id="errorpassword"> </p> </td>
            </tr>          
           
            <tr>
                 <td>Comment:</td>
                 <td><textarea rows="5" cols="30" id="comment" name="comment"></textarea></td> <td> <p id="errorcomment"> </p> </td>
            </tr>
                      
            <tr>
                <td><label for="gender">Gender: </label></td>
                <td>
                <input type="radio" id="male" name="gender" value="male"> Male 
                <input type="radio" id="female" name="gender" value="female"> Female 
                <input type="radio" id="others" name="gender" value="others"> Others <td> <p id="errorgender"> </p> </td>
                </td>
            </tr>  
                      
            <tr>
               
                <td><label for="hobby"> Please Choose a hobby: </label></td>
                <td>
                <input type="checkbox" id="singing1" name="hobby1" value="Singing">Singing             
                <input type="checkbox" id="dancing2" name="hobby2" value="Dancing">Dancing 
                <input type="checkbox" id="reading3" name="hobby3" value="Reading">Reading
                
                </td>       
            </tr>
                     
            <tr>
                <td><label for="hobby">Please Choose a File: </label></td>
                <td><input type="file" id="myfile" name="FileToUpload"></td>
              
            </tr>  
            <tr>
                <td> <input type="submit" name="Submit"> 
                <input type="reset" name="Reset">
                </td>
                </tr>
            
        </table>
    </form>
</body>
</html>