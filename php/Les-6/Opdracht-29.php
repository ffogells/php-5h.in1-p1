<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 29</title>
    <?php
        function btw($bedrag,$btwpercentage) {
            $btw = round(($bedrag * $btwpercentage) + $bedrag, 2);
            return $btw;
        }
    ?>
</head>
<body>
    <?php 
        echo btw(100,0.21);  
    ?>
</body>
</html>