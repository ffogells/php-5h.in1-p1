<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 16</title>
</head>
<body>
    <form method="_GET" action="Opdracht-16.php">
        <p>Voer hier een getal in van 1 t/m 99: <input type="text" size="2" name="getal" value="<?php if (!empty($_GET["getal"])){echo $_GET["getal"];}?>"></p>
        <input type="submit" value="Maak een tafel">
        <?php
        $aantal = 1;
        $getal = $_GET["getal"];
        if (!empty($getal) && $getal <= 99 && $getal >= 1) {
            while ($aantal <= 10){ 
                echo "<p>".$aantal." × ".$getal." = ".$aantal * $getal."</p>";
                $aantal++;
            }
        }
        else {
            echo "<p>Ongeldige invoer</p>";
        }




        ?>
    </form>
</body>
</html>