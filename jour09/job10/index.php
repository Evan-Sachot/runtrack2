<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT SUM(capacite) as total FROM salles";
$result = $conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    foreach ($row as $key => $value) {
        echo $row["total"];
    
    }
} 
}
else {
    echo "rien";
}