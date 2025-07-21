<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="GET">
  <label for="user">Largeur:</label>
  <input type="text" id="large" name="large"><br><br>
  <label for="user">hauteur:</label>
  <input type="text" id="haut" name="haut">
  <br>
  <input type="submit" value="Submit">
</form>



<?php 
$largeur = (int)$_GET["large"];
$hauteur = (int)$_GET["haut"];
if($largeur>0 && $hauteur>0){
for($i=0; $i< $largeur; $i++) {
echo str_repeat(' ', intval($largeur-$i));
echo "/";
echo str_repeat('_', intval($i+$i));
echo "\<br>";
}

for ($i = 0; $i < $hauteur; $i++){
echo "|";
echo str_repeat(' ', $largeur+$largeur);
echo "|<br>";
}
echo str_repeat("_", $largeur+$largeur);
}
?>

</body>
</html>