
<?php

function estPremier($number) 
{
    //boucle de 2 au nombre à tester
    for ($i = 2; $i < $number; $i++ ) {
        //test du qutotien de la division
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
