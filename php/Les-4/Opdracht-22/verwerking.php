<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 22</title>
</head>
<body>
    <h1>Gekozen vakken:</h1>
    <?php
        $vakken = $_POST["vak"];
        $aantal = (count($vakken) - 1);
        while ($aantal >= 0) {
            echo "<p>".$vakken[$aantal]."</p>\n";
            $aantal--;
        }
    ?>
</body>
</html>