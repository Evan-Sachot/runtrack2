<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT * FROM etudiants WHERE naissance > '1998-01-01' and naissance < '2018-01-01'";
$result = $conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
   
        echo "Nom: " . $row["nom"] . " - Prénom: " . $row["prenom"] . " - Naissance: " . $row["naissance"] . "<br>";
    
    
} 
}
else {
    echo "Aucun résultat trouvé.";
}