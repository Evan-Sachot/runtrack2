<?php 

function calcule() {
$a = 3;
$operation ="+";
$b= 3;
return eval('return '.$a.$operation.$b.';');

}
echo calcule();
?>