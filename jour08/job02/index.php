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

 session_start();

  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
  } else {
    $_SESSION['count']++;
  }
  
    $count = $_SESSION['count'];

  echo $count;
  if (isset($_GET['reset'])) {
    session_unset();
  }
?>