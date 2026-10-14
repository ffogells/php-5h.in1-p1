<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
</head>
<body>
    <?php 
        date_default_timezone_set('Europe/Amsterdam');
        $uur = date('H');
        if ($uur >= 0 && $uur < 6) {
            echo "Goedenacht";
        }
        elseif ($uur >= 6 && $uur < 12) {
            echo "Goedemorgen";
        }
        elseif ($uur >= 12 && $uur < 18) {
            echo "Goedemiddag";
        }
        elseif ($uur >= 18 && $uur < 24) {
            echo "Goedenavond";
        }        
        else {
            echo "Er is iets fout gegaan. $uur: ".$uur." date('H'): ".date ('H');
        }
    ?>
</body>
</html> 