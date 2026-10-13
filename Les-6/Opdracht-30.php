<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 30</title>
    <?php include("../functions.php") ?>
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
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie zwaar ondergewicht.";
            }
            elseif ($bmi < 18.5) {
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie ondergewicht.";
            }
            elseif ($bmi < 25) {
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie normaal.";
            }
            elseif ($bmi < 30) {
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie overgewicht.";
            }
            elseif ($bmi < 35) {
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie obesitas niveau 1.";
            }
            elseif ($bmi < 40) {
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie obesitas niveau 2.";
            }
            elseif ($bmi >= 40) {
                echo "Je BMI is ".$bmi.". Dat valt onder de categorie obesitas niveau 3.";
            }
        }
    ?>
</body>
</html>