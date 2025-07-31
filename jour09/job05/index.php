<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT nom, prenom, naissance, email, sexe FROM etudiants WHERE sexe ='Femme'";
$result = $conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["nom"] . " - Prénom: " . $row["prenom"] . " - Naissance: " . $row["naissance"] . " - Email: " . $row["email"] . " - Sexe: " . $row["sexe"] . "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}