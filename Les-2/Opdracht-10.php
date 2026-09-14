<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Opdracht 10</title>
</head>
<body>
  <form method="post" action="Formulier-afhandeling.php">
    <p>Voornaam: <input type="text" size="20" name="voornaam"></p>
    <p>Achternaam: <input type="text" size="20" name="achternaam"></p>
    <p>Geslacht: 
      <input type="radio" name="geslacht" value="man">Man
      <input type="radio" name="geslacht" value="vrouw">Vrouw
      <input type="radio" name="geslacht" value="anders">Anders      
    </p>
    <p>Profiel:
      <select>
        <option>NT</option>
        <option>NG</option>
        <option>EM</option>
        <option>CM</option>
      </select>
    </p>
    <p>Geboortedatum:
      <input type="date" name="geboortedatum">
    </p>
    <p>
      <input type="submit" value="Verstuur">
    </p>
  </form>
</body>
</html>
