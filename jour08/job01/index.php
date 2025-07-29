<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="get">
    <button type="submit" name="reset" value="1">Reset</button>
   </form>
</body>
</html>
<?php 

 session_start();
 
$counter = 'counter.txt';
if (!file_exists($counter)) {
    file_put_contents($counter, 0);
}

  $nbvisites = (int)file_get_contents($counter);
  $nbvisites++;
  file_put_contents($counter, $nbvisites);

$nbvisites = (int)file_get_contents($counter);
if (isset($_GET['reset'])) {
    file_put_contents($counter, 0);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
echo "$nbvisites";

  // if (!isset($_SESSION['count'])) {
  //   $_SESSION['count'] = 1;
  // } else {
  //   $_SESSION['count']++;
  // }
  
  //   $count = $_SESSION['count'];

  // echo $count;
  // if (isset($_GET['reset'])) {
  //   session_unset();
  
?>