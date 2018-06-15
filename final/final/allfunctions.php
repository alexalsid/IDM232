
 <?php


/* Browse page */


/*ALL RECIPES LOOP*/

// info from the filter submission or catagory link 


$query = $_POST['protein'];
$cata = $_GET['protein'];


// if user arrived to this location by submitting the form change value of $sql 


$sql = "SELECT  id, title, img FROM recipes WHERE protein = '{$cata}'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();


if (isset($_POST['protein'])) {

$sql = "SELECT  id, title, img FROM recipes WHERE protein = '{$query}'";}

//if user got here from catagory link

elseif (isset($_GET['protein'])) {
$sql = "SELECT  id, title, img FROM recipes WHERE protein = '{$cata}'";}

else {$sql = 'SELECT  id, title, img FROM recipes';};


// loop that will make all this work
//this gets the stuff from the thing


$result = $connection->query($sql);

// this makes the url that will work for every recipe 


if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo '<div' . ' ' . 'class="recipe-card">'  . '<img src="img/' . $row['img'] .'">' .  '<a href="recipeview.php?id=' . $row['id'] . '">' . $row['title'] . '</a>'  . '</div>';
    }
} else {
    echo "0 results";
}; 

?> 

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

<?php



/* ********search page******** */


$query = $_POST['search'];
$sql = "SELECT * FROM recipes WHERE title LIKE '%{$query}%' OR dscription LIKE '%{$query}%' OR ingredients LIKE '%{$query}%'";
$result = $connection->query($sql); 


if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo '<div' . ' ' . 'class="recipe-card">'  . '<img src="img/' . $row['img'] .'">' .  '<a href="recipeview.php?id=' . $row['id'] . '">' . $row['title'] . '</a>'  . '</div>';
    }
} else {
    echo '<div id="results">

            <img src="assets/sad-face.svg" id="sad-face"></object>

            <h1> Sorry, no results came up for that search. Try searching for something else.</h1>
            </div>';
}; ?>



------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


/* recipe page */

<?php include 'db.php';
$query = $_GET['id'];
$sql = "SELECT * FROM recipes WHERE id = '{$query}'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
?>


