<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 8</title>
    <?php include("../credentials.php"); include("../databaseConnectie.php"); include("../../php/functions.php") ?>
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
    <style>
    table, th, td {
        border: 1px solid black;
    }
    </style>
    <table>
    <?php 
        echo $boodschap."<br>\n"; 
        while ($rij = mysqli_fetch_array($resultaat) ) {
            echo "<tr><td>".$rij["id"]."</td><td>".$rij["voornaam"]."</td><td>".$rij["achternaam"]."</td><td>".geslacht($rij["geslacht"])."</td><td>".$rij["profiel"]."</td><td>".$rij["geboortedatum"]."</td></tr><br>\n";
        }
        mysqli_close($connectie);
    ?>
    </table>
</body>
</html>