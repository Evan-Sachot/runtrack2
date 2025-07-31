<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT nom, capacite FROM salles";
$result = $conn->query($sql);
var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Capacité</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["capacite"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Aucun résultat trouvé.</td></tr>";
        }
        ?>
    </table>

</body>
</html>
    </table>
    
</body>
</html>