
<?php 

 session_start();
if (!isset($_COOKIE['prenom'])) {
    $_COOKIE['prenom'] = "";
}
if (isset($_GET['deco'])) {
    setcookie("prenom", "", time() - 3600);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
if (isset($_GET["prenom"]) && !empty($_GET["prenom"])) {
    $prenom = htmlspecialchars($_GET["prenom"]);
    setcookie("prenom", $prenom, time() + 3600);
    
}

// if (isset($_GET['reset'])) {
//     file_put_contents($listenom, "");
//     header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
<tr>
    <td><button type="submit" value="-"></button></td>
    <td><button type="submit" value="-"></button></td>
    <td><button type="submit" value="-"></button></td>
</tr>
<tr>
    <td><button type="submit" value="-"></button></td>
    <td><button type="submit" value="-"></button></td>
    <td><button type="submit" value="-"></button></td>
</tr>
<tr>
    <td><button type="submit" value="-"></button></td>
    <td><button type="submit" value="-"></button></td>
    <td><button type="submit" value="-"></button></td>
</tr>

</form>
   
  
</body>
</html>