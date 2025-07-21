<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<table>
<tr>
    <th>Argument</th>
    <th>Valeur</th>
</tr>
<tr>
<th>Name</th>
<th><?php echo $_POST["name"]; ?></th>
</tr>
<tr>
    <th>e-mail</th>
    <th><?php echo $_POST["email"]; ?></th>
</tr>

</table>
    
</body>

<?php


?>
    
</html>