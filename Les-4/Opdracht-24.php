<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 23</title>
</head>
<body>
    <?php
        $weekdagen = array( "Mon" => "maandag",
                            "Tue" => "dinsdag",
                            "Wed" => "woensdag",
                            "Thu" => "donderdag",
                            "Fri" => "vrijdag",
                            "Sat" => "zaterdag",
                            "Sun" => "zondag" );
        foreach ($weekdagen as $verkortedag => $dag) {
            if (date("D") == $verkortedag) {
                echo "Het is vandaag: ".$dag;
            }
        }
    ?>
</body>
</html>