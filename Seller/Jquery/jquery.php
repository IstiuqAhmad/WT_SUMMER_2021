<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "yellow");
  });
  $("input").blur(function(){
    $(this).css("background-color", "green");
  });
});

$(document).ready(function(){
  $("#p1").mouseenter(function(){
    alert("You are now in Update Info page");
  });
});
</script>
</head>
<body>
<h1>Update Info Form</h1>
Name: <input type="text" name="fullname"><br>
Email: <input type="text" name="email">

<p id="p1">See where you are?</p>
<br>
<a href="../view/welcome.php">Back </a>

</body>
</html>