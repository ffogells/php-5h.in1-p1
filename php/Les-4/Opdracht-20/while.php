<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 20 while</title>
</head>
<body>
    <?php
        $array = array("maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag","zondag");
        $aantal = 0;
        while ($aantal <= 6) {
            echo "<p>".$array[$aantal]."</p>\n";
            $aantal++;
        }
    ?>
</body>
</html>