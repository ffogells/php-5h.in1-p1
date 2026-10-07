<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 21</title>
</head>
<body>
    <?php
        $cijfers = array(1.5,9.4,5.5,4.1,7.5,8.3,3.6);
        $gemiddelde = (array_sum($cijfers) / count($cijfers));
        echo number_format((float)$gemiddelde, 1, '.', '');
    ?>
</body>
</html>