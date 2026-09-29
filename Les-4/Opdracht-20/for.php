<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 20 for</title>
</head>
<body>
    <?php
    $array = array("maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag","zondag");
    for ($aantal = 0; $aantal <=6; $aantal++) {
        echo "<p>".$array[$aantal]."</p>\n";
    }
    ?>
</body>
</html>