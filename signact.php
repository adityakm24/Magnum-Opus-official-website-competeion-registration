<?php
$schoolname = $_POST["sname"];
$teachername = $_POST["tname"];
$teachernumber = $_POST["tnum"];
$teacheremail = $_POST["tmail"];

$ep1= $_POST["ep1"];
$ep2= $_POST["ep2"];
$ep3= $_POST["ep3"];
$ep4= $_POST["ep4"];
$ep5= $_POST["ep5"];

$dp1= $_POST["dp1"];
$dp2= $_POST["dp2"];
$dp3= $_POST["dp3"];


$dep1= $_POST["dep1"];
$dep2= $_POST["dep2"];


$mp1= $_POST["mp1"];
$mp2= $_POST["mp2"];
$mp3= $_POST["mp3"];


$elp1= $_POST["elp1"];
$elp2= $_POST["elp2"];


$cp1= $_POST["cp1"];
$cp2= $_POST["cp2"];
$cp3= $_POST["cp3"];
$cp4= $_POST["cp4"];
$cp5= $_POST["cp5"];
$cp6m= $_POST["cp6m"];
$cp7m= $_POST["cp7m"];

$ip1= $_POST["ip1"];
$ip2= $_POST["ip2"];


$vp1= $_POST["vp1"];
$vp2= $_POST["vp2"];
$vp3= $_POST["vp3"];

$conn = mysqli_connect("localhost","id11185319_magnumdb","mesterio123","id11185319_users");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(empty($username)){
}

$sql = "INSERT INTO magnumdb(schoolname, teachername, teachernumber, teacheremail, Excelsior1, Excelsior2, Excelsior3,
 Excelsior4, Excelsior5, Daedal1, Daedal2, Daedal3, Depaysment1, Depaysment2,
 Meraki1, Meraki2, Meraki3,Elysian1, Elysian2, Capitolcouture1, Capitolcouture2,
 Capitolcouture3, Capitolcouture4, Capitolcouture5,Capitolcouture6m,Capitolcouture7m, Incantere1, Incantere2, Vagary1, Vagary2, Vagary3) 
 VALUES('$schoolname','$teachername','$teachernumber','$teacheremail',
 '$ep1','$ep2','$ep3','$ep4','$ep5',
 '$dp1','$dp2','$dp3',
 '$dep1','$dep2', '$mp1','$mp2','$mp3', '$elp1','$elp2', '$cp1','$cp2','$cp3','$cp4','$cp5','$cp6m','$cp7m', '$ip1','$ip2',
  '$vp1','$vp2','$vp3')";

if ($conn->query($sql) === TRUE) {
    header("Location: regs.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>