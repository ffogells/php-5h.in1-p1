<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 28</title>
</head>
<body>
    <h1>Het tekenen van een lijn m.b.v. variabelen</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <a>Welke kleur moet de lijn krijgen? </a><select name="kleur"><option value="red">rood<option value="green">groen<option value="blue">blauw<option value="yellow">geel</select><br>
        <a>Hoe lang moet de lijn worden? </a><select name="lengte"><option value="100">100<option value="200">200<option value="300">300<option value="400">400</select><br>
        <a>Hoe dik moet de lijn worden? </a><select name="dikte"><option value="10">10<option value="20">20<option value="30">30<option value="40">40</select><br>
        <input type="submit" value="Teken de lijn">
    </form>
    <?php
        if (!empty($_POST)) {
            $kleur = $_POST["kleur"];
            $lengte = $_POST["lengte"];
            $dikte = $_POST["dikte"];
            echo "<hr style=\"background:".$kleur."; width:".$lengte."px; height:".$dikte."px;\">";
        }
    ?>
</body>
</html>