<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
    <?php include("../databaseConnectie.php"); ?>
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
    <?php echo $boodschap; ?>
</body>
</html>