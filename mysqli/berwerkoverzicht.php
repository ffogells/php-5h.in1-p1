<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bewerkoverzicht leerlingen</title>
    <?php include("databaseConnectie.php"); include("credentials.php"); include("functions.php"); ?>
    <?php
        $query = "SELECT * FROM leerlingen";

        if (!$resultaat = mysqli_query($connectie,$query)) {
            $boodschap .= "Query \"$query\" is mislukt!";
        } else {
            $boodschap .= "Query is gelukt!";
        }
    ?>
</head>
<body>
    <?php
        while ($rij - mysqli_fetch_assoc($resultaat)) {
            echo $rij["voornaam"]." ".$rij["achternaam"]." => <a href=\"bewerkformulier.php?id=".$rij["id"]."\">bewerk</a><br>\n"; 
            // TEST DIT ^
        }
        mysqli_close($connectie);
    ?>
</body>
</html>