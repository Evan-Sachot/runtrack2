
<?php 

 session_start();
 if (!isset($_SESSION['grille'])){
$_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);

$_SESSION['joueur1']= 0;
$_SESSION['joueur2']= 0;
$_SESSION['tour']= 1;
 }
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
if (!empty($_GET['button'])){
    $jouer = $_GET['button']-1;
    if ($_SESSION['grille'][$jouer] == 0) {
        $_SESSION['grille'][$jouer] = $_SESSION['tour'];
       
        if (victoire($_SESSION['grille'],$_SESSION['tour'])){
        echo "<h2>joueur".$_SESSION['tour']." a gagné !</h2>";
        session_destroy();
    }
    $_SESSION['tour'] = $_SESSION['tour'] == 1 ? 2 : 1;
    }
    if (draw($_SESSION['grille'])) {
        echo "<h2>Match nul !</h2>";
        session_destroy();
    }
}
if (isset($_GET['reset'])) {
    $_SESSION['grille'] = array(0,0,0,0,0,0,0,0,0);
    $_SESSION['tour'] = 1;
    $_SESSION['joueur1'] = 0;
    $_SESSION['joueur2'] = 0;
 header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
function draw($grille) {
    foreach ($grille as $case) {
        if ($case == 0) {
            return false;
        }
    }
    return true;
}
function victoire ($grille, $joueur) {
    $combinaisons = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], 
        [0, 3, 6], [1, 4, 7], [2, 5, 8], 
        [0, 4, 8], [2, 4, 6] 
    ];
    foreach ($combinaisons as $comb) {
        if ($grille[$comb[0]] == $joueur && 
            $grille[$comb[1]] == $joueur && 
            $grille[$comb[2]] == $joueur) {
            return true;
        }
    }
    return false;
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            width: 80px;
            height: 80px;
            font-size: 36px;
            font-weight: bold;
            background-color: #fff;
            border: 2px solid #000;
            cursor: pointer;
            border: none;
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
        .reset-button{
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .reset-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>c'est au tour du joueur <?php echo $_SESSION['tour']; ?></h2>
    <form method="get">
<table>
<?php
for ($i = 0; $i < 9; $i++) {
    if ($i % 3 == 0) {
        echo "<tr>";
    }
    
    if ($_SESSION['grille'][$i] == 0) {
        echo "<td><button type='submit' name='button' value='".($i+1)."'> </button></td>";
    } else {
        $symbol = $_SESSION['grille'][$i] == 1 ? 'X' : 'O';
        echo "<td class='taken'>$symbol</td>";
    }
    
    if ($i % 3 == 2) {
        echo "</tr>";
    }
}
?>
</table>
<button class="reset-button" type="submit" name="reset" value="1">Reset</button>
</form>
   
  
</body>
</html>