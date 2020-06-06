<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
      <body>
<form action="submit.php" method="post">
              <label for="i-firstname">Krestni jmeno:</label> 
              <input type="text" name="firstname" id="i-firstname">
</br>
              <label for="i-lastname">Prijmeni:</label>
              <input type="text" name="lastname" id="i-lastname">
</br>
              <label for="i-birtyear">Rok narozeni:</label>
              <input type="number" min="1900" max="2020" name="birthyear" id="i-birthyear">
</br>             
              <label for="i-school">Skola:</label>
              <input type="text" name="school" id="i-school">
</br>
              <label for="i-hobby">Konicky:</label>
              <input type="text" name="hobby" id="i-hobby">
</br>          
              <label for="i-class">Trida:</label>
              <input type="text" name="class" id="i-class">
</br>
              <label for="i-description">Popis:</label>
              <textarea name="description" id="i-description" cols="30" rows="10"></textarea>
</br>
              <input type="submit" value="odeslat">
</form> 
      </body>
</html>