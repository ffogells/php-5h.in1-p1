<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 9</title>
</head>
<body>
    <form method="post" action="../Opdracht-10.php">
        <p>Voornaam: <input type="text" size="20" name="voornaam"></p>
        <p>Achternaam: <input type="text" size="20" name="achternaam"></p>
        <p>Geslacht: 
            <input type="radio" name="geslacht" value="1" checked>Mannelijk
            <input type="radio" name="geslacht" value="1">Vrouwelijk
        </p>
        <p>Profiel: 
            <select name="profiel">
                <option>NT</option>
                <option>NG</option>
                <option>EM</option>
                <option>CM</option>
            </select>
        </p>
        <p>Geboortedatum: <input type="date" name="geboortedatum"></p>
        <p><input type="submit" value="Vestuur"></p>
    </form>
</body>
</html>