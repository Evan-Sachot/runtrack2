<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ex = array(26,37,88,1111,3233);
    for ($i =0;  $i < 100; $i++) {
    if($i <= 20){
    echo"<i>$i</i> <br>";
    } 
    if($i <=50 && $i >25){
    echo"<u> $i </u> <br>";
    }
    if($i<= 25 && $i >19) {
    echo"$i <br>";
    }
    if($i>=50){
    echo"$i <br>";
    }
   }
    
?>
</body>
</html>
