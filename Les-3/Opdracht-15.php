<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 15</title>
</head>
<body>
    <form>
        <p>Geboortejaar:</p>
        <select>
            <?php 
            $jaar = date("Y");
            $jaarstop = date("Y") - 130;
            while($jaar >= $jaarstop) {
                echo "<option>".$jaar."</option>\n";
                $jaar--;
            }?>
            <?php
            //De opdracht zei tot 2000, ik heb dit gedaan want dat is logischer voor een geboortejaar, maar de code voor tot 2000 zou dit zijn:
            //
            //$jaar = date("Y");
            //while($jaar >= 2000) {
            //    echo "<option>".$jaar."</option>\n";
            //    $jaar--;
            ?>
        </select>
    </form>
</body>
</html>