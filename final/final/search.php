<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Search Results
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="search.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="fonts.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="header.css" />


</head>
<body>

<?php include 'db.php';
$query = $_POST['search'];?>


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

        $rand = rand(1,40);
        
        echo '<a href="recipe.php?id=' . $rand . '">' ?>
            <li>Random Recipe</li>
        </a>
    </ul>

    <img src="assets/search.svg" id="mag-glyph">
</header>


<!-- search -->

<div class="no-display" id="searchview">
    <img src="assets/exit.svg" alt="exit" id="exit">
    <form method="post"  action="search.php">
        <input type="text" name="search" id="search-recipes" placeholder="<?php echo $query; ?>">
        <input type="submit" name="submit" id="submit">
    </form>
</div>


<!--main content/functionality -->

<main>

    <!-- visible search -->

    <form action="search.php" method="post">
        <input type="text" name="search" id="search-box" placeholder=" showing results for '<?php echo $query?>'" action="search.php" method="post">
        <input type="submit" name="submit" id="submit">
    </form>

    <div id="results">





<?php 
$sql = "SELECT * FROM recipes WHERE title LIKE '%{$query}%' OR dscription LIKE '%{$query}%' OR ingredients LIKE '%{$query}%'";
$result = $connection->query($sql); 


if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo '<div' . ' ' . 'class="result-card">'  . '<img src="img/' . $row['img'] .'">' .  '<a href="recipe.php?id=' . $row['id'] . '">' . $row['title'] . '</a>'  . '</div>';
    }
} else {
    echo '<div id="results">

            <img src="assets/sad-face.svg" id="sad-face"></object>

            <h1> Sorry, no results came up for that search. Try searching for something else.</h1>
            </div>';
};?>



   


        


    </div>

    </main>



    <footer>
        <p>Site created by Alexandra Alsid, with total permission from Blue Apron</p>
    </footer>



<script src="main.js"></script>
</body>

</html>


