<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heron's Formula - Triangle Area Calculator </title>
</head>
<body>
    <h1>Triangle Area Calculator Using Heron's Formula</h1>

    <form method="POST">
        Side  1: <input type="number" name="side1" required><br><br>
        Side  2: <input type="number" name="side2" required><br><br>
        Side  3: <input type="number" name="side3" required><br><br>
        <input type="submit" value="Calculate Area"><br>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];

    $s = ($side1 + $side2 + $side3) / 2;
    $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);
    echo "<h2>The area of the triangle is: <b>" . number_format($areaSquared ** (1/2), 2) . "</b></h2>";
    }
    ?>

</body>
</html>