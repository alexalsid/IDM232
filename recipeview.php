<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Single Recipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "IDM232";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
 die("Database connection failed: " .
 mysqli_connect_error() .
 " (" . mysqli_connect_errno() . ")"
 );
};



?>




<?php

echo 'hello';

$query = $_GET['id'];
echo $query;
$sql = "SELECT * FROM recipes WHERE id = '{$query}'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
print_r ($row);


?>
    
</body>
</html>