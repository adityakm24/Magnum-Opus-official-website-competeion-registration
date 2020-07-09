<?php
// Start the session
session_start();
?>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type = "text/css" href = "css/login-signup-form.css" />
<script>
$(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
</script>
</head>
<?php
  include "dbconnect.php";
	//Unset the variables stored in session
	$_SESSION['uname'] = $uname;
?>


      <form action="loginserv.php" method="POST" class="login-form">
        <h1>Login</h1>
      
        <div class="txtb">
          <input type="text" placeholder="Username" name="uname">
        </div>

        <div class="txtb">
          <input type="password" placeholder="Password" name="pass">
        </div>

        <input type="submit" class="logbtn" name="submit" value="Login">

        <div class="bottom-text">
          Don't have account? <a href="signupf.php">Sign up</a>
        </div>
        
      </form>
</body>
</html>