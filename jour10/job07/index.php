<?php
$servname = "localhost"; $user = "root"; $pass = ""; $dbname = "jour09";

$conn = new mysqli($servname, $user, $pass, $dbname);
$sql = "SELECT sum(superficie) as total FROM etage";
$result_total = $conn->query($sql);
$total = $result_total->fetch_assoc()['total'];

$sql ="SELECT nom, superficie FROM etage";
$result = $conn->query($sql);
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
            <th>superficie total</th>
            <th>Nom</th>
            <th>Superficie</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $total. "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["superficie"] . "</td>";
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