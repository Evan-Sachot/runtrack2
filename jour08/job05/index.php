
<?php 

 session_start();
$_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);

$_SESSION['joueur1']= 0;
$_SESSION['joueur2']= 0;
$_SESSION['tour']= 1;
$jr = 1;
$jr2 = 2;

if (empty($_SESSION['grille'])) {
    $_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);
}
if (empty($_SESSION['joueur1'])) {
    $_SESSION['joueur1'] = 0;
}
if (empty($_SESSION['joueur2'])) {
    $_SESSION['joueur2'] = 0;
}   
if (empty($_SESSION['tour'])) {
    $_SESSION['tour'] = 1;
}
if (!empty($_GET['button1'])){
    $jouer = $_GET['button1']-1;
    if ($_SESSION['grille'][$jouer] == 0) {
        $_SESSION['grille'][$jouer] = $_SESSION['tour'];
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            width: 80px;
            height: 80px;
            font-size: 36px;
            font-weight: bold;
            background-color: #fff;
            border: 2px solid #000;
            cursor: pointer;
        }
        button:hover {
            background-color: #f0f0f0;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        td {
            width: 80px;
            height: 80px;
            text-align: center;
            vertical-align: middle;
            font-size: 36px;
            font-weight: bold;
            border: 2px solid #000;
            cursor: pointer;
        }
        td:hover {
            background-color: #f0f0f0;
        }
        td.taken {
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <form method="get">
<table>
<tr>
    <td><button type="submit" name="button1" value="-"></button></td>
    <td><button type="submit" name="button2" value="-"></button></td>
    <td><button type="submit" name="button3" value="-"></button></td>
</tr>
<tr>
    <td><button type="submit" name="button4" value="-"></button></td>
    <td><button type="submit" name="button5" value="-"></button></td>
    <td><button type="submit" name="button6" value="-"></button></td>
</tr>
<tr>
    <td><button type="submit" name="button7" value="-"></button></td>
    <td><button type="submit" name="button8" value="-"></button></td>
    <td><button type="submit" name="button9" value="-"></button></td>
</tr>
</table>
</form>
   
  
</body>
</html>