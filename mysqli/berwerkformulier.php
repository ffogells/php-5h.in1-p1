<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bewerk de leerling</title>
    <?php include("credentials.php"); include("databaseConnectie.php"); include("../php/functions.php"); ?>
    <?php
        $leerlingid = $_GET["id"];
        $query = "SELECT * FROM leerlingen WHERE id='$leerlingid'";
        
</head>
<body>
    
</body>
</html>