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
        </select>
    </form>
</body>
</html>