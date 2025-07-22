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
$decal = 1;
$str = $_GET["str"];
$select= $_GET["fonction"];
$wc = str_word_count($str,1);

function gras($wc){ 
    for($i=0;$i<count($wc);$i++){
        if(ctype_upper($wc[$i][0])){
        echo "<b>$wc[$i]</b> ";
        }
        else{
        echo "$wc[$i] ";
}
}
}
function cesar($str,$decal){
$alpha=["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",];
    for($i=0 ; $i < strlen($str);$i++){
    $arc= $i;
    $keywithdecal = array_search($str[$i],$alpha)+$decal;
    $resultat= $alpha[$keywithdecal];
    print_r($resultat);
    }
}
function plateforme($wc){
    
    for($i=0;$i<count($wc);$i++){
    $sub= substr_count($wc[$i][-1],"e");
    $sub1=substr_count($wc[$i][-2],"m");
        if($sub===1||$sub1===1){
        echo "$wc[$i]"."_ ";
        }
        else{
        echo "$wc[$i] ";
        }
    }
}
if($select==="gras"){gras($wc);}

if($select==="cesar"){cesar($str,$decal);}

if($select==="plateforme"){plateforme($wc);}

?>
</body>

</html>