<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
    <?php 
        include("../../credentials.php");

        if (!$connectie = mysqli_connect($server,$username,$wachtwoord,$database)) {
            $boodschap = "Verbinding is mislukt omdat: ".mysqli_connect_error($connectie)." Met als foutnummer: ".mysqli_connect_errno($connectie);
        }
        else {
            $boodschap = "Verbinding is gelukt!";
        } 
    ?>
</head>
<body>
    <?php echo $boodschap; ?>
</body>
</html>