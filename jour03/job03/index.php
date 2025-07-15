<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$b = ["B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"] ;

$voyel= str_ireplace($b, "",$str);
echo"$voyel";
?>