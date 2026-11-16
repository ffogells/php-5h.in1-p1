<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 10</title>
    <?php include("../credentials.php"); include("../databaseConnectie.php"); include("../../php/functions.php") ?>
    <?php
        echo $boodschap;
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $geslacht = $_POST["geslacht"];
        $profiel = $_POST["profiel"];
        $geboortedatum = $_POST["geboortedatum"];

        echo $voornaam.$achternaam.$geslacht.$profiel.$geboortedatum;
        $query = "INSERT INTO leerlingen (voornaam, achternaam, geslacht, profiel, geboortedatum) VALUES ('$voornaam', '$achternaam', '$geslacht', '$profiel', '$geboortedatum')";
    ?>
</head>
<body>
<?php
    if (!$resultaat = mysqli_query($connectie,$query)) {
        $boodschap .= " Query \"$query\" is mislukt! ";
    } else {
        $boodschap .= " Query is gelukt! ";
    }
    echo $boodschap;
    mysqli_close($connectie);
?>
</body>
</html>