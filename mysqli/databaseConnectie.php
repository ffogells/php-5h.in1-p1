
<?php 
    include("../credentials.php");
    if (!$connectie = mysqli_connect($server,$username,$wachtwoord,$database)) {
        $boodschap = "Verbinding is mislukt omdat: ".mysqli_connect_error($connectie)." Met als foutnummer: ".mysqli_connect_errno($connectie);
    }
    else {
        $boodschap = "Verbinding is gelukt!";
    } 
?>