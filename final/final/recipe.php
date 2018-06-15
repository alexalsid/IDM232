<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="recipe.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="fonts.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="header.css" />
    <script src="main.js"></script>
</head>
<body>

<?php include 'db.php';
$query = $_GET['id'];
$sql = "SELECT * FROM recipes WHERE id = '{$query}'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
?>


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

            
            <?php $rand = rand(1,40);
            echo '<a href="recipe.php?id=' . $rand . '">'?>
                <li>Random Recipe</li>
            </a>
        </ul>

        <img src="assets/search.svg" id="mag-glyph">
    </header>


    <!-- search -->

    <div class="no-display" id="searchview">
        <img src="assets/exit.svg" alt="exit" id="exit">
        <form action="search.php" method="post">
            <input type="text" name="search" id="search-recipes" placeholder="find a recipe">
            <input type="submit" name="submit" id="submit">
        </form>
    </div>


   




<main>
    <div id="image"> <?php echo '<img src="img/' . $row['imgbig']. '">';?></div>
    </div>
<div id="title">
    <h1><?php echo $row['title']; ?></h1>
    <h3><?php echo $row['subtitle']; ?></h3>
</div>

    <div id="description">
       
         <p><?php echo $row['dscription']; ?></p>
    </div>


    <div class="menu-sect"  id="steps">
     
        <h2>Directions</h2>
    
  
        
        <dl>
            <?php echo $row['step1'];
            echo $row['step2']; 
            echo $row['step3']; 
            echo $row['step4']; 
            echo $row['step5']; 
            echo $row['step6']; ?>
        </dl>
    </div>

  
    <div class="menu-sect" id="ingredients">
        <h2>Ingredients</h2>

        <ul>
          <?php echo $row['ingredients'];?>
        </ul>
    </div>


</main>

<footer>
    <p>Site created by Alexandra Alsid, with total permission from Blue Apron</p>
</footer>

<script src="main.js"></script>
</body>
</html>