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
            while($jaar >= 2000) {
                echo "<option>".$jaar."</option>\n";
                $jaar--;
            }?>
            <?php
            ?>
        </select>
    </form>
</body>
</html>