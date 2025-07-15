
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function countVowels($str){
$vcount= 0;
$dic = array("voyelles" => "aeiouyAEIOUY", "consonnes"=>"BCDFGHJKLMNPQRSTVWXZbcdfghjklmnpqrstvwxz");
    for ($i=0; $i < strlen($str);$i++){
    if (strpos($dic['voyelles'],$str[$i])!==false){
    $vcount++;
    }
    }
    return $vcount;
}
function countconsonnes($str){
$ccount= 0;
$dic = array("voyelles" => "aeiouyAEIOUY", "consonnes"=>"BCDFGHJKLMNPQRSTVWXZbcdfghjklmnpqrstvwxz");
// $consonnes = "BCDFGHJKLMNPQRSTVWXZbcdfghjklmnpqrstvwxz";
    for ($i=0; $i < strlen($str);$i++){
    if (strpos($dic["consonnes"],$str[$i])!==false){
    $ccount++;
    }
    }
    return $ccount;
}
$str="On n’est pas le meilleur quand on le croit mais quand on le sait.";



?>
<table>
 <tr>
    <td>consonnes</td>
    <td>voyelles</td>
</tr> 
<tr>
   <td><?php echo countconsonnes($str); ?></td>
   <td><?php echo countVowels($str); ?></td> 
</tr>
</table>
</body>
</html>
