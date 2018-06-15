<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Browse Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="browse.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="fonts.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="header.css" />

</head>
<body>

</head>

<body>



<?php include 'db.php'?>


    <header>
        <div id="logo-div">
            <a href="index.php">
                <img src="assets/logo.svg" alt="logo" id="logo">
            </a>
        </div>

        <ul id="nav">
            <a href="browse.php">
                <li>Browse All Recipes</li>
            </a>
            <a href="recipe.php">
                <li>Random Recipe</li>
            </a>
        </ul>

        <img src="assets/search.svg" id="mag-glyph">
    </header>


    <!-- search -->

    <div class="no-display" id="searchview">
        <img src="assets/exit.svg" alt="exit" id="exit">
        <form method="post"  action="search.php">
            <input type="text" name="search" id="search-recipes" placeholder="find a recipe">
            <input type="submit" name="submit" id="submit">
        </form>
    </div>

<main>
<img src="assets/filter.png" alt="filter recipes" id="filter">




<h1>Recipes</h1>

<div id="recipes">

<?php /*ALL RECIPES LOOP*/

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
        echo '<div' . ' ' . 'class="recipe-card">'  . '<img src="img/' . $row['img'] .'">' .  '<a href="recipe.php?id=' . $row['id'] . '">' . $row['title'] . '</a>'  . '</div>';
    }
} else {
    echo "0 results";
}; 

?>

    
</div>
    </main>

<footer>
    <p>Site created by Alexandra Alsid, with total permission from Blue Apron</p>
</footer>

<!-- filter menu -->

<div class="off-filter-menu" id="all-filters">
    <h2>Filter Recipes</h2>
    <img src="assets/exit.png" alt="exit here" id="exit-filter">


    <form action="browse.php" method="post">
    <label class="container">Chicken
        <input type="checkbox" name="protein" value="chicken"> 
        <span class="checkmark"></span>
    </label>
    
    <label class="container">Beef
        <input type="checkbox" name="protein" value="beef">
        <span class="checkmark"></span>
    </label>
    
    <label class="container">Pork
        <input type="checkbox" name="protein" value="pork" >
        <span class="checkmark"></span>
    </label>
    
    <label class="container">Fish
        <input type="checkbox" name="protein" value="fish" >
        <span class="checkmark"></span>
    </label>

    <label class="container">Vegetarian
        <input type="checkbox" name="protein"  value="vegetarian">
        <span class="checkmark"></span>
    </label>

     <label class="container">Turkey
        <input type="checkbox" name="protein"  value="turkey">
        <span class="checkmark"></span>
    </label>




    <input type="submit" name="submit-filters" id="submit-filters">

</form>

</div>
<script>   var filterMenu = document.getElementById('all-filters');
    var filterBtn = document.getElementById('filter');
    var filterExit = document.getElementById('exit-filter');


    function revealMenu() {
        filterMenu.className = 'filter-menu';
    };

    function hideMenu() {
        filterMenu.className = 'off-filter-menu';
    };


    filterBtn.addEventListener("click", revealMenu);
    filterExit.addEventListener("click", hideMenu); </script>


    <script src="main.js"></script>


</body>
</html>