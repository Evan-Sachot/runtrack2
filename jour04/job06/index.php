<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="GET">
  <label for="user">Nombre:</label>
  <input type="number" id="nbr" name="nbr"><br><br>
  
  <br>
  <input type="submit" value="Submit">
</form>



<?php 
$number = $_GET["nbr"];
if ($number % 2 === 0){
echo ("nombre pair");
}
else{
echo ("Nombre impair");
}

?>
</body>
</html>