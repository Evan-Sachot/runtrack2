<?php 

function leetSpeak() {
$str ="ararararab";

$str=str_ireplace(array("a","b","e","g","l","s","t"),array("4","8","3","6","1","5","7"),$str);
echo $str;
}
echo leetSpeak();
?>