<?php
$hauteur = 5;
for($i=0; $i < $hauteur ;$i++){
echo str_repeat('&nbsp;',($hauteur-$i));
for($j = 0; $j <= $i; $j++)
    {
        echo "*";
    }
    echo "<br />";
} 
?>