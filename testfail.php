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


include 'db.php'



?>

 <?php


/*ALL RECIPES LOOP*/

   


 
/* query from the filter submission */
$query = $_POST['protein']; 

// if user arrived to this location by submitting the form change value of $sql 
if (isset($_POST['protein'])) {
$sql = "SELECT  id, title, img FROM recipes WHERE protein = '{$query}'";}
else {$sql = 'SELECT  id, title, img FROM recipes';};


// loop that will make all this work
//this gets the stuff from the thing


$result = $connection->query($sql);
// this makes the url that will work for every recipe 







if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo '<div' . ' ' . 'class="recipe-card">'  . $row['img'].  '<a href="recipeview.php?id=' . $row['id'] . '">' . $row['title'] . '</a>'  . '</div>';
    }
} else {
    echo "0 results";
}; 

?>


<form method="post" action="testfail.php">
    <input type="checkbox" name="protein" value="chicken">
    <input type="checkbox" name="protein" value="beef">
    <input type="checkbox" name="protein" value="turkey">
    <input type="submit" name="submit">
</form>





<form action="results.php" method="post">
    <input type="text" name="searchbar" placeholder="search all recipes">
    <input type="submit" name="submit" placeholder="go!" required>

</form> 














</body>
</html>