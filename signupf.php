<html>
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: montserrat;
  box-sizing: border-box;
}

body {
  background-image: url(images/bg.jpg);
  background-size: 100% 100%;
}

.login-form{
  width: 360px;
  background: #f1f1f1;
  height: 770px;
  padding: 80px 40px;
  border-radius: 10px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}

.login-form h1{
  text-align: center;
  margin-bottom: 60px;
}

.txtb{
  border-bottom: 2px solid #adadad;
  position: relative;
  margin: 30px 0;
}

.txtb input{
  font-size: 15px;
  color: #333;
  border: none;
  width: 100%;
  outline: none;
  background: none;
  padding: 0 5px;
  height: 40px;
}

.txtb span::before{
  content: attr(data-placeholder);
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  z-index: -1;
  transition: .5s;
}

.txtb span::after{
  content: '';
  position: absolute;
  width: 0%;
  height: 2px;
  background: linear-gradient(120deg,#3498db,#8e44ad);
  transition: .5s;
}

.focus + span::before{
  top: -5px;
}
.focus + span::after{
  width: 100%;
}

.logbtn{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#3498db,#8e44ad,#3498db);
  background-size: 200%;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: .5s;
}

.logbtn:hover{
  background-position: right;
}

.bottom-text{
  margin-top: 40px;
  text-align: center;
  font-size: 13px;
}


</style>
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
<body>


      <form action="signact.php" method="POST" class="login-form" enctype="multipart/form-data"> 
        <h1>Sign up</h1>

        <div class="txtb">
          <input type="text" placeholder="Name" name="name">
        </div>

        <div class="txtb">
          <input type="text" placeholder="School name" name="scname">
        </div>
        
        <div class="txtb">
          <input type="text" placeholder="Teacher in charge" name="tname">
        
        </div>

        <div class="txtb">
          <input type="text" placeholder="Teacher's phone number" name="tnum">
        </div>

        <div class="txtb">
          <input type="text" placeholder="Student in charge" name="stname">
        </div>

        <div class="txtb">
          <input type="text" placeholder="Student's phone number" name="stnum">
        </div>

        <div class="txtb">
          <input type="text" placeholder="Student in charge" name="eventname">
        </div>

        <select name="events">
    <option value="volvo">event1</option>
    <option value="saab">event2</option>
    <option value="fiat">event3</option>
    <option value="audi">event4</option>
  </select>

<input type="submit" class="logbtn" name="register" value="Register">
        <div class="bottom-text">
          Already have an account? <a href="login.php">Log in</a>
        </div>
        
      </form>
  </body>
</html>
