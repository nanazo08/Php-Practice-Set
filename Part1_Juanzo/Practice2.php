<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of Fruits</title>
</head>
<body>

    <?php
     $fruit_list = array("Apple","Orange","Banana","Watermelon","Grapes");

     echo "<h2>My Favorite Fruits</h2>";
     echo "<ol>";
     for ($a = 0; $a < count($fruit_list); $a++) {
         echo"<li>".$fruit_list[$a]."</li>";
     }
     echo "</ol>";
     ?>

</body>
</html>