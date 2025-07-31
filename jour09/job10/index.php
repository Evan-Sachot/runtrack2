<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT SUM(superficie) as total FROM etage";
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