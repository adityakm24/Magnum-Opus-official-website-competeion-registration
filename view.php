<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
echo "  <table class='table'>";
 echo "
 <tr><th>schoolname</th> <th>teachername</th> <th>teachernumber</th> <th>teacheremail</th> 
 <th>Excelsior1</th> <th>Excelsior2</th> <th>Excelsior3</th>
 <th>Excelsior4</th> <th>Excelsior5</th> <th>Daedal1</th> <th>Daedal2</th> <th>Daedal3</th>
  <th>Depaysment1</th> <th>Depaysment2</th>
 <th>Meraki1</th> <th>Meraki2</th> <th>Meraki3</th> <th>Elysian1</th> <th> Elysian2</th> 
 <th>Capitolcouture1</th> <th>Capitolcouture2</th>
 <th>  Capitolcouture3 </th>    <th>Capitolcouture4</th> <th> Capitolcouture5</th> <th>Capitolcouture6m</th>
 <th>Capitolcouture7m </th><th> Incantere1</th>
 <th>Incantere2</th> <th> Vagary1</th> <th>Vagary2</th>
 <th> Vagary3</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}


$servername = "localhost";
$username = "id11185319_magnumdb";
$password = "mesterio123";
$dbname = "id11185319_users";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  schoolname, teachername, teachernumber, teacheremail, Excelsior1, Excelsior2, Excelsior3,
    Excelsior4, Excelsior5, Daedal1, Daedal2, Daedal3, Depaysment1, Depaysment2,
    Meraki1, Meraki2, Meraki3,Elysian1, Elysian2, Capitolcouture1, Capitolcouture2,
    Capitolcouture3, Capitolcouture4, Capitolcouture5,Capitolcouture6m,Capitolcouture7m, Incantere1,
     Incantere2, Vagary1, Vagary2,
      Vagary3 FROM magnumdb");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html



