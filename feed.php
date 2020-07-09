<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel = "stylesheet" type = "text/css" href = "css/top-nav-txtarea.css" />
</head>
<body>
<?php 
include "dbconnect.php";
session_start();
$uname = $_SESSION['uname'];

$sql = "SELECT * FROM userdb where Uname='$uname'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo $row["Uname"];   
}
?>
<div class="topnav" id="myTopnav">
<a href=""><i class="material-icons" style="font-size:30px;color:#03ffc4"">house</i></a>
  <a href=""><i class="material-icons" style="font-size:30px;color:#03ffc4"">explore</i></a>
  <a href=""> <i class="material-icons" style="font-size:30px;color:#03ffc4"">search</i> </a>
  <a href=""> <i class="material-icons" style="font-size:30px;color:#03ffc4">message</i></a>
  <a href=""><i class="material-icons" style="font-size:30px;color:#03ffc4"">notifications</i></a>
 <a href="profile.php"><i class="material-icons" style="font-size:30px;color:#03ffc4">person</i></a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px">
  <h2>Responsive Topnav Example</h2>
  <p>Resize the browser window to see how it works.</p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
