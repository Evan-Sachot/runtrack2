<!DOCTYPE html>
<html lang="en">
     <?php 
$valeur= $_GET["style"];

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="<?php echo "$valeur" ?>"  >
</head>
<body>
    
<form action="index.php" method="GET">
  <label for="user">Style:</label>
  <select name="style" id="style">
    <option value="style1.css">blue</option>
    <option value="style2.css">green</option>
    <option value="style3.css">black</option>
  </select>
  <br>
  <br>
  <input type="submit" value="Submit">
</form>

</body>

</html>