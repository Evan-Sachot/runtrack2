<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="POST">
  <label for="user">Utilisateur:</label>
  <input type="text" id="user" name="user"><br><br>
  <label for="pwd">Mot de passe:</label>
  <input type="pwd" id="pwd" name="pwd"><br><br>
  <input type="submit" value="Submit">
</form>



<?php 

$user = $_POST["user"];
$pwd = $_POST["pwd"];

if ($pwd === "Rambo" & $user === "John") 
{
echo ("C'est pas ma guerre");
} else {
    echo ("Votre pire cauchemar");
}
?>
</body>
</html>