<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tester.css" />
    <script src="main.js"></script>
</head>
<body>


    <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "test_01";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
 die("Database connection failed: " .
 mysqli_connect_error() .
 " (" . mysqli_connect_errno() . ")"
 );
};



?>












</body>
</html>