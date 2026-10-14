<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
</head>
<body>
    <?php 
        date_default_timezone_set('Europe/Amsterdam');
        if (date('I') == 1) {
            echo "Het is zomertijd";
        } else {
            echo "Het is wintertijd";
        }
    ?>
</body>
</html> 