<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 11 resultaat</title>
</head>
<body>
    <?php
        $antwoord = $_POST["hoofdstad"];
        if ($antwoord == "b") {
            echo "<h1>Dat klopt!</h1>\n";}
        else {
            echo "<h1>Dat is fout!</h1>";
            echo "<p>Het goede antwoord was Berlijn.</p>";}
    ?>
</body>
</html>
