<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 17</title>
</head>
<body>
    <form method="_GET" action="Opdracht-17.php">
        <p>Voer hier een getal in om de faculteit uit te rekenen: <input type="text" size="4" name="getal" value="<?php if (!empty($_GET["getal"])){echo $_GET["getal"];}?>"></p>
        <input type="submit" value="Bereken">
        <?php
        if (!empty ($_GET["getal"])) {
            $getal = $_GET["getal"];
        }
        if (!empty($getal)) {
            $totaal = $getal * ($getal - 1);
            $getal--;
            while ($getal >= 2){ 
                $getal--;
                $totaal = $totaal * $getal;                
            }
            echo "<p>Faculteit: ".$totaal."</p>";
        }
        ?>
    </form>
</body>
</html>