<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 26</title>
</head>
<body>
    <?php
        foreach ($_SERVER as $x => $y) {
            echo "<p>".$x." => ".$y."</p>\n";
        }
    ?>
</body>
</html>