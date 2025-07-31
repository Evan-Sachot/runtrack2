<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT if (salles.capacite = (select MAX(capacite) from salles), 'biggest room', salles.nom) as nom_salle,
 etage.nom as nom_etage, salles.capacite as capacite FROM salles

 inner join etage on salles.id_etage = etage.id
 where salles.capacite = (select MAX(capacite) from salles)";
$result = $conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "Salle: " . $row["nom_salle"] . " - Etage: " . $row["nom_etage"] .  " - Capacité: " . $row["capacite"] . "<br>";
    }
}
else {
    echo "Aucun résultat trouvé.";
}
$conn->close();
?>