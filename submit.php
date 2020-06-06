<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$birthyear = filter_input(INPUT_POST, 'birthyear');
$school = filter_input(INPUT_POST, 'school');
$hobby = filter_input(INPUT_POST, 'hobby');
$class = filter_input(INPUT_POST, 'class');
$description = filter_input(INPUT_POST, 'description');

$guessAge = date('Y') - $birthyear;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <p>Formular byl odeslan</p>
      <ul>
          <li>Jmeno: <?= $firstname ?></li>
          <li>Prijmeni: <?= $lastname ?></li>
          <li>Rok naroyeni: <?= $birthyear ?></li>
          <li>Odhadovany vek: <?= $guessAge; ?></li>
          <li>Skola: <?= $school ?></li>
          <li>Konicky: <?= $hobby ?></li>
          <li>Trida: <?= $class ?></li>
          <li>Popis: <?= $description ?></li>
      </ul>    
</body>
</html>