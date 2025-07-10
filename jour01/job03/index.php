<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
   <table style="width: 100%;" >
<?php
$entier = 5;
$float = 5.5;
$mot = "mot";
function getVariableName($cc) {
    foreach($GLOBALS as $varName => $value) {
        if ($value === $cc) {
            return $varName;
        }
    }
    return;
}

?>    
<tr>
    <th>type</th>
    <th>nom</th>
    <th>valeur</th>
</tr>
</header>
<tbody>
<tr>
    <th><?php echo "$entier" ?></th>
    <th><?php echo getVariableName($entier) ?></th>
    <th><?php echo gettype($entier) ?></th>
</tr>
<tr>
    <th><?php echo "$float" ?></th>
    <th><?php echo getVariableName($float) ?></th>
    <th><?php echo gettype($float) ?></th>
</tr>
<tr>
    <th><?php echo "$mot" ?></th>
    <th><?php echo getVariableName($mot) ?></th>
    <th><?php echo gettype($entier) ?></th>
</tr>
</tbody>
</table> 



</body>
</html>
