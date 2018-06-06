<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reciplease</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="fonts.css" />
    <script src="main.js"></script>
</head>
<body>
<header>
    <object data="assets/logo.svg" alt="logo" id="logo"></object>
    <object data="assets/search.svg" id="search-glyph"></object>
</header>
<main>

    <div id="top">
        <form  action="search.php" method="post">
            <input type="text" name="search" id="search-bar" placeholder="search recipes"  required>
            <input type="submit" name="submit" id="submit">
        </form>
        <a href="browse.php">Browse All Recipes >></a>
    </div>

    <div id="about">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     </div>


     <h3 id="cata-head"> Browse Catagories</h3>

     <div id="browse-catagories">
       <div id="catagory">

    

        <a href="browse.html"><div id="cata-2">
            <h4>Chicken</h4>
        </div></a>

        <div id="cata-3">
            <h4>Beef</h4>
        </div>

        <div id="cata-4">
            <h4>Vegetarian</h4>
        </div>

        <div id="cata-5">
            <h4>Pork</h4>
        </div>

        <div id="cata-6">
            <h4>Fish</h4>
        </div>

        <div id="cata-7">
            <h4>Turkey</h4>
        </div>


    
    

       </div>
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


<div class="no-display" id="searchview>
    <object data="assets/exit.svg" alt="exit" id="exit"></object>
    <form>
        <input type="text" name="find a recipe" id="search-recipes" placeholder="find a recipe">
    </form>
</div>
    
</body>
</html>