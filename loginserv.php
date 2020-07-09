<?php
include "dbconnect.php";
$uname = $_POST["uname"];
$pass = $_POST["pass"];
// To protect from MySQL injection
$uname = stripslashes($uname);
$pass = stripslashes($pass);
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM userdb WHERE Uname='$uname' AND pass='$pass'");



$rows = mysqli_num_rows($query);
if($rows == 1){
header("Location: feed.php"); // Redirecting to other page\
echo("success");
}
else
{
echo("Username or Password is Invalid");
}

?>