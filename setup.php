<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database Setup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>




 <?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "IDM232";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
 die("Database connection failed: " .
 mysqli_connect_error() .
 " (" . mysqli_connect_errno() . ")"
 );
};


$title = "Ginger-Marinated Grassfed Steaks";

$img = '<img src="img/ginger-steak.jpg">';

$ingredients = "<ul>
<li>2  Grassfed Steaks</li>
<li>3 oz  Radishes</li>
<li>4 oz  Cremini Mushrooms</li>
<li>¾ cup  Jasmine Rice</li>
<li>½ lb  Baby Bok Choy</li>
<li>1  Shallot</li>
<li>1 Tbsp  Sugar</li>
<li>1  1-Inch Piece Ginger</li>
<li>1 Tbsp  Ponzu Sauce</li>
<li>1 Chile Pepper</li>
<li>1 Tbsp  Rice Vinegar</li>
<li>1 Tbsp  Soy Sauce</li>



</ul>";

$steps = '<ol>

<!-- Step 1 -->

<li>
Peel and finely chop the ginger. Place in a medium bowl. Stir in the soy sauce, ponzu sauce, and a drizzle of olive oil. 
Pat the steaks dry with paper towels; season with salt and pepper on both sides. Place in the bowl of marinade and turn to 
coat. Set aside to marinate, turning occasionally, for at least 10 minutes.</li>


<!-- Step 2 -->

<li>
While the steaks marinate, in a medium pot, combine the rice, a big pinch of salt, and 1 1/2 cups of water. Heat to boiling 
on high. Once boiling, cover and reduce the heat to low. Cook 12 to 14 minutes, or until the water has been absorbed and the 
rice is tender. Turn off the heat and fluff with a fork. Cover to keep warm.</li>

 <!-- Step 3 -->

<li>While the rice cooks, wash and dry the fresh produce. Quarter the mushrooms. Peel and thinly slice the shallot. Cut off
 and discard the root end of the bok choy; roughly chop. Cut off and discard the ends of the radishes; thinly slice into rounds.
  Place in a bowl. Top with half the vinegar; season with salt and pepper. Set aside to marinate, stirring occasionally, for at 
  least 10 minutes. Cut off and discard the stem end of the pepper; thinly slice crosswise. (For a milder dish, remove and discard
   the seeds first.) Thoroughly wash your hands, knife, and cutting board immediately after handling.



</li>

  <!-- Step 4 -->

<li>In a medium pan, heat 2 teaspoons of olive oil on medium-high until hot. Add the quartered mushrooms in an even layer. 
Cook, without stirring, 2 to 3 minutes, or until lightly browned. Add the sliced shallot, chopped bok choy, and as much of the
 sliced pepper as you’d like, depending on how spicy you’d like the dish to be; season with salt and pepper. Cook, stirring 
 frequently, 2 to 3 minutes, or until softened. Transfer to a bowl. Stir in the remaining vinegar; season with salt and pepper to taste. 
 Cover with aluminum foil. Rinse and wipe out the pan.
 </li>

  <!-- Step 5 -->

<li>In the same pan, heat 2 teaspoons of olive oil on medium-high until hot. Reserving the marinade, add the marinated steaks. 
Cook, turning occasionally, 7 to 9 minutes for medium-rare, or until browned and cooked to your desired degree of doneness. Leaving
 any browned bits (or fond) in the pan, transfer to a cutting board and let rest for at least 5 minutes.</li>

<!-- Step 6 -->


<li> While the steaks rest, to the pan of reserved fond, add the reserved marinade, sugar, and 1/4 cup of water (be careful, as 
the liquid may splatter). Bring to a boil on medium-high. Cook, stirring constantly, 2 to 3 minutes, or until thickened. Turn off 
the heat and season with salt and pepper to taste. Find the lines of muscle (or grain) on the rested steaks; thinly slice crosswise 
against the grain. Serve the sliced steaks with the cooked rice and cooked vegetables. Top the steaks with the sauce. Garnish with 
the marinated radishes (draining before adding). Enjoy!</li> 

</ol>';

$dscription = '<p>
In this recipe—inspired by our Quickfire Challenge from Top Chef Season 15 on Bravo—we’re marinating grassfed steaks in fresh ginger, 
soy sauce, and citrusy ponzu sauce. The extra marinade transforms into an easy pan sauce, which adds punchy flavor to the steaks and a side of jasmine rice.





</p>';

$protein = 'beef';

echo $title;
echo $ingredients;
echo $img;
echo $steps;
echo $dscription;
echo $protein;


 /* INSERT STATEMENT */

  /*$query = "INSERT INTO recipes (title, img, ingredients, steps, dscription, protein)
            VALUES ('{$title}', '{$img}', '{$ingredients}', '{$steps}', '{$description}', '{$protein}')";
 $result = mysqli_query($connection, $query);

 // Check there are no errors with our SQL statement
  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } else {
    die ("Database query failed. " . mysqli_error($connection));
  };*/






?>
    
    
    
    
    
    
</body>
</html>