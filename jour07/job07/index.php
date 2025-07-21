<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="GET">
  <label for="user">Texte:</label>
  <input type="text" name="str" id="str">
  <select name="fonction" id="fonction">
    <option value="gras">gras</option>
    <option value="cesar">cesar</option>
    <option value="plateforme">plateforme</option>
  </select>
  <br>
  <br>
  <input type="submit" value="Submit">
</form>
<?php
$str = $_GET["str"];
$select= $_GET["fonction"];
$wc = str_word_count($str,1);
if($select==="gras"){

// preg_match_all('([A-Z][^\s]*)', $str, $matches);
// foreach($matches[0] as $w){
// $str = str_replace($w,"<b>$w<b>",$str);
}
echo "$str"; 


?>
</body>

</html>