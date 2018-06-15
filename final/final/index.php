<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reciplease</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
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

            <?php 
            // generate random id

            $rand = rand(1,40);
            
            echo '<a href="recipe.php?id=' . $rand .'">'; ?>
                <li>Random Recipe</li>
            </a>
        </ul>

        <img src="assets/search.svg" id="mag-glyph">
    </header>


 <!-- search -->



    <div class="no-display" id="searchview">
        <img src="assets/exit.svg" alt="exit" id="exit">
        <form method="post"  action="search.php">
            <input type="text" name="search" id="search-recipes" placeholder="find a recipe" >
            <input type="submit" name="submit" id="submit">
        </form>
    </div>






<main>

    <div id="top">
        <form>
            <input type="text" name="search" id="search-bar" placeholder="search recipes">
            <input type="submit" name="submit" id="submit">
        </form>
        <a href="browse.html">Browse All Recipes >></a>
    </div>

    <div id="about">
        
        <h3>About Us</h3>
        <div class="underline"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     </div>


     <h3 id="cata-head"> Browse Catagories</h3>
        <div class="underline"></div>
       <div id="catagory">

        <div id="cata-1">
            <a href="browse.php?protein=chicken"><h4>Chicken</h4></a>
        </div>

        <div id="cata-2">
        <a href="browse.php?protein=beef"><h4>Beef</h4></a>
        </div>

        <div id="cata-3">
            <a href="browse.php?protein=vegetarian"><h4>Vegetarian</h4></a>
        </div>

        <div id="cata-4">
            <a href="browse.php?protein=pork"><h4>Pork</h4></a>
        </div>

        <div id="cata-5">
            <a href="browse.php?protein=turkey"><h4>Turkey</h4></a>
        </div>

        <div id="cata-6">
            <a href="browse.php?protein=fish">
                <h4>Fish</h4>
            </a>
        </div>
    

    </div>
     </div>

    </main>

    <footer>
        <p>Site created by Alexandra Alsid, with total permission from Blue Apron</p>
    </footer>

    



 


<script src="main.js"></script>

</body>
</html>