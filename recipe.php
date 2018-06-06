<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="recipe.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="fonts.css" />
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
    <object data="assets/logo.svg" alt="logo" id="logo"></object>
    <object data="assets/search.svg" alt="search" id="search-glyph"></object>
</header>


<main>
    <div id="image"><?php echo $row['img']?></div>
  

    <h1><?php echo $row['title']?></h1>

    <div id="description">
       
        <?php echo $row['dscription']?> 
    </div>

 

    <div class="menu-sect"  id="steps">
        <h2>Directions</h2>

        <?php echo $row['steps']?>
    </div>

  
    <div class="menu-sect" id="ingredients">
        <h2>Ingredients</h2>
    
      <?php echo $row['ingredients']?>
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

<div class="no-display">
    <object data="assets/exit.svg" alt="exit" id="exit"></object>
    <form>
        <input type="text" name="find a recipe" id="search-recipes" placeholder="find a recipe">
    </form>
</div>

<script> 
    var steps = document.getElementById('steps');
    var ingred = document.getElementById('ingredients');
    var arrowOne = document.getElementById('arrow-1');
    var arrowOneDown = document.getElementById('arrow-1-down');
    var arrowTwo = document.getElementById('arrow-2');
    var arrowTwoDown = document.getElementById('arrow-2-down');

    function expandSteps() {
        steps.className = 'show-menu-sect';
        arrowOne.className = 'no-display';
        arrowOneDown.className= 'arrow';
        
    };

     function collapseSteps() {
            steps.className = 'menu-sect';
            arrowOne.className = 'arrow';
            arrowOneDown.className = 'no-display';

        };

    function expandIngred() {
            ingred.className = 'show-menu-sect';
             arrowTwo.className = 'no-display';
            arrowTwoDown.className = 'arrow';

        };

        function collapseIngred() {
                ingred.className = 'menu-sect';
                arrowTwo.className = 'arrow';
                arrowTwoDown.className = 'no-display';

            };

 arrowOne.addEventListener('click', expandSteps);
 arrowTwo.addEventListener('click', expandIngred);
 arrowOneDown.addEventListener('click', collapseSteps);
 arrowTwoDown.addEventListener('click', collapseIngred);
    
         


</script>
    
</body>
</html>