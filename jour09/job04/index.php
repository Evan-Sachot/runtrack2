<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT nom, capacite FROM salles";
$result = $conn->query($sql);
var_dump($result);
?>