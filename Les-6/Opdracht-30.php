<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 30</title>
    <?php include("../functions.php"); ?>
</head>
<body>
    <h1>BMI berekenen</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <a>Gewicht in kilogram: </a><input type="text" name="gewicht"><br>
        <a>Lengte in meter: </a><input type="text" name="lengte"><br>
        <input type="submit" value="Bereken">
    </form>
    <?php
        if (!empty($_POST)) {
            $bmi = bmi($_POST["gewicht"],$_POST["lengte"]);
            if ($bmi < 16) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie zwaar ondergewicht.</a>";
            }
            elseif ($bmi < 18.5) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie ondergewicht.</a>";
            }
            elseif ($bmi < 25) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie normaal.</a>";
            }
            elseif ($bmi < 30) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie overgewicht.</a>";
            }
            elseif ($bmi < 35) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie obesitas niveau 1.</a>";
            }
            elseif ($bmi < 40) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie obesitas niveau 2.</a>";
            }
            elseif ($bmi >= 40) {
                echo "<a>Je BMI is ".$bmi.". Dat valt onder de categorie obesitas niveau 3.</a>";
            }
        }
    ?>
</body>
</html>