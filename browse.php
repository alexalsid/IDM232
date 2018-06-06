<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Browse Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="browse.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="fonts.css" />
    <script src="main.js"></script>
</head>
<body>
<?php include 'db.php'?>
<header>
    <object data="assets/logo.svg" alt="logo" id="logo"></object>
    <object data="assets/search.svg" id="search-glyph"></object>
</header>

<main>
<img src="assets/filter.png" alt="filter recipes" id="filter">




<h1>Recipes</h1>

<div id="recipes">

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
    

   

    
</div>
    </main>

    <footer>
        <div id="news-letter">
            <h3> Sign up for Our Newsletter</h3>
            <form>
                <input type="text" name="email" id="email" placeholder="janedoe@example.com">
                <input type="submit" name="sumbit" id="submit">
            </form>
        </div>
    
    </footer>

<!-- search screen -->
   
<div class="no-display">
    <img src="assets/exit.png" alt="exit" id="exit-search"/>
    <form>
        <input type="text" name="find a recipe" id="search-recipes" placeholder="find a recipe">
    </form>
</div>

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

<script src="main.js"></script>


</body>
</html>