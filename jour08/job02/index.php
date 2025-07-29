<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="get">
    <input type="submit" name="reset" value="Reset">
   </form>
</body>
</html>
<?php 

//  session_start();

if (isset($_COOKIE['nbvisites'])){
  setcookie("nbvisites",$_COOKIE["nbvisites"]+1);
echo  $_COOKIE['nbvisites'] + 1;
}
else {
  setcookie("nbvisites",1);
  echo '1';
}
if (isset($_GET['reset'])) {
    setcookie("nbvisites", 0, time() - 3600); // Expire the cookie
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
?>