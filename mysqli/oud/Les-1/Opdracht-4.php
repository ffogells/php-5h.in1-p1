<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
</head>
<body>
    <?php
        $server = "localhost";
        $database = "sam";
        $username = "sam";
        $wachtwoord = "verkeerdwachtwoord";

        if (!$connectie = mysqli_connect($server,$username,$wachtwoord,$database)) {
            $boodschap = "Verbinding is mislukt omdat: ".mysqli_connect_error($connectie)." Met als foutnummer: ".mysqli_connect_errno($connectie);
        }
        else {
            $boodschap = "Verbinding is gelukt!";
        } 
        
        echo $boodschap;
        ?>
</body>
</html>