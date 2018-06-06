<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tester.css" />
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

/*FILTER FUNCTION RECIPES LOOP*/



$query = $_POST['protein'];
$sql = "SELECT title, img FROM recipes WHERE protein = '{$query}'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div' . ' ' . 'class="recipe-card">' . '<p>' . $row['title'] .'</p>' . $row['img'] . '</div>';
    }
} else {
    echo "0 results";
};

?>

    
</body>
</html>