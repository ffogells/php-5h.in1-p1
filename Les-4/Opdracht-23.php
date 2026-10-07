<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 23</title>
</head>
<body>
    <?php
        $dagenpermaand = array( "Januari" => "31",
                                "Februari" => "28",
                                "Maart" => "31",
                                "April" => "30",
                                "Mei" => "31",
                                "Juni" => "30",
                                "Juli" => "31",
                                "Augustus" => "31",
                                "September" => "30",
                                "Oktober" => "31",
                                "November" => "30",
                                "December" => "31" );
        foreach ($dagenpermaand as $maand => $dagen) {
            echo "<p>".$maand." heeft ".$dagen." dagen.</p><br>\n";
        }
    ?>
</body>
</html>