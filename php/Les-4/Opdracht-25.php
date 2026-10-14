<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 25</title>
</head>
<body>
    <style>
    table, th, td {
        border: 1px solid black;
    }
    </style>
    <?php
        $kleur = array( "#ffebcd" => "BlanchedAlmond",
                        "#5f9ea0" => "CadetBlue",
                        "#deb887" => "BurlyWood",
                        "#556b2f" => "DarkOliveGreen",
                        "#ff69b4" => "HotPink",
                        "#ffefd5" => "Papayawhip" );
    ?>
    <h1>Kleurentabel</h1>
    <table>
        <tr>
            <th><b>Hex code</b></th>
            <th><b>Kleur</b></th>
        </tr>
        <?php
            foreach ($kleur as $hex => $kleurnaam) {
            echo "<tr>\n<td bgcolor=\"".$hex."\">".$hex."</td>\n<td>".$kleurnaam."</td>\n</tr>\n"; 
            }
        ?>
    </table>
</body>
</html>