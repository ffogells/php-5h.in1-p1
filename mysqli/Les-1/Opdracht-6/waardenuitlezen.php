<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 6 waarden uitlezen</title>
    <?php include("../../credentials.php"); include("../../databaseConnectie.php"); ?>
    <?php
        $query = "SELECT * FROM leerlingen";

        if (!$resultaat = mysqli_query($connectie,$query)) {
            $boodschap .= " Query \"$query\" is mislukt! ";
        } else {
            $boodschap .= " Query is gelukt! ";
        }
    ?>
</head>
<body>
    <?php 
        echo $boodschap."<br>\n"; 
        while ($rij = mysqli_fetch_array($resultaat) ) {
            echo $rij["id"]." ".$rij["voornaam"]." ".$rij["achternaam"]." ".$rij["geslacht"]." ".$rij["profiel"]." ".$rij["geboortedatum"]."<br>\n";
        }
        mysqli_close($connectie);
    ?>
</body>
</html>