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
    <script src="main.js"></script>
</head>
<body>


<?php include 'db.php';
$query = $_POST['search'];
?>
        <header>
            <object data="assets/logo.svg" alt="logo" id="logo"></object>
            <object data="assets/search.svg" id="search-glyph"></object>
        </header>


        <main>

            <form action="search.php" method="post">
                <input type="text" name="search" id="search-box" placeholder=" showing results for '<?php echo $query?>'">
            </form>

            <div id="results">
    
<?php 


$sql = "SELECT * FROM recipes WHERE title LIKE '%{$query}%' OR dscription LIKE '%{$query}%' OR ingredients LIKE '%{$query}%' OR steps LIKE '%{$query}%'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<div' . ' ' . 'class="result-card">'  . $row['img'].  '<a href="recipe.php?id=' . $row['id'] . '">' . $row['title'] . '</a>'  . '</div>';
    }
} else {
    echo "0 results";
} ?>
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
    

    
</body>
</html>