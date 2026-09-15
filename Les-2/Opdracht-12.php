<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Opdracht 12</title>
</head>
<body>
  <form method="GET" action="Opdracht-12.php">
    <p>Getal 1: <input type="text" size="20" name="getal1" value="<?php if (!empty($_GET["getal1"])){echo $_GET["getal1"];} ?>"></p>
    <p>Getal 2: <input type="text" size="20" name="getal2" value="<?php if (!empty($_GET["getal1"])){echo $_GET["getal2"];} ?>"></p>
    <p>Operatie:
      <select name="operatie">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="×">×</option>
        <option value="/">/</option>
      </select>
    </p>
    <p>
      <input type="submit" value="Bereken">
    </p>
  </form>
  <?php
 // if (!empty($_GET["getal1"] && $_GET["getal2"] && $_GET["operatie"])) {
 //   if ($_GET["operatie"] == "+") {$antwoord = $_GET["getal1"] + $_GET["getal2"]}
 //   elseif ($_GET["operatie"] == "×") {$antwoord = $_GET["getal1"] * $_GET["getal2"]}
 //   elseif ($_GET["operatie"] == "-") {$antwoord = $_GET["getal1"] - $_GET["getal2"]}
 //   elseif ($_GET["operatie"] == "/") {$antwoord = $_GET["getal1"] / $_GET["getal2"]}
 // }?>


 <?php
$antwoord = $_GET["operatie"];
echo "HALLO HIER STAAT HET HOPELIJK" . $antwoord;
 ?>

  <p>Antwoord: <input type="text" value="<?php if(!empty($antwoord)) {echo $antwoord;} ?>"></p>
</body>
</html>
