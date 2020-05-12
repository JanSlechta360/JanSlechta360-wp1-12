<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$birthyear = 2004;
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

          <li>Jmeno a prijmeni: <?= $firstname ?></li>
          <li>Rok naroyeni: </li>
          <li>Odhadovany vek: <?= $guessAge; ?></li>
      </ul>    
</body>
</html>