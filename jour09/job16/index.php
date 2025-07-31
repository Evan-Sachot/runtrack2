<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT MAX(capacite) as capacite_max, salles.nom as nom_salle, etage.nom as nom_etage FROM salles inner join etage on salles.id_etage = etage.id";
$result = $conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "Salle: " . $row["nom_salle"] . " - Etage: " . $row["nom_etage"] . " - Capacité Max: " . $row["capacite_max"] . "<br>";
    }
}
else {
    echo "Aucun résultat trouvé.";
}