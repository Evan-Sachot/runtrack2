<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT * FROM salles ORDER BY capacite DESC";
$result = $conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
   
        echo $row["nom"] . " - " . $row["capacite"] . " - " . $row['id_etage'] . " - " . $row['capacite'] . "<br>";

    
} 
}
else {
    echo "rien";
}