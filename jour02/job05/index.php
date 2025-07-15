
<?php

function estPremier($number) 
{
    for ($i = 2; $i < $number;$i++) {
        
        if ($number % $i == 0) {
            return FALSE;
        } else {
            return true;
        }
    }
}
for ($i = 2; $i <= 100; $i++){
    if (estPremier($i)){
        echo "$i <br>";
    }
}
    
?>
