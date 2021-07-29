
function validateForm() {

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var comment = document.getElementById("comment").value;
        var password = document.getElementById("password").value;
        var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
        var res = patt.test(email);
 
        

        if (name == "" ) {
         document.getElementById("errorname").innerHTML="Please enter fullname";
         alert("Warning! You must enter all information"); 
      
        }
        else{
          document.getElementById("errorname").innerHTML="";
        }
        if(!res)
        {
          document.getElementById("errormail").innerHTML="Email is not correct";
          
        }
        else
        {
         document.getElementById("errormail").innerHTML="";
        }

       if (password.length<4){
         document.getElementById("errorpassword").innerHTML="Password must be 4 Character";
           
        }

        else 
       {
        document.getElementById("errorpassword").innerHTML="";
       }

        if (comment.length<8) {
          document.getElementById("errorcomment").innerHTML="Comment must be 8 character";
           return false;
         }

       else 
       {
         document.getElementById("errorcomment").innerHTML="";
       }
         
      
 }