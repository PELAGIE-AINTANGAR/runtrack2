<?php
//connexion a la base de donnees
$servername = 'localhost';
$username = 'root';
$password = 'root';
// connexion a la base de donnees avec PDO
$conn = new PDO("mysql:host=$servername;dbname=jour9", $username, $password);
// requete pour recuperer les noms et capacites de chaune des salles
$sql = "SELECT salles.nom, salles.capacite FROM salles";
$resultat = $conn->query($sql);
// affichage des informations de la table etudiants

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Nom</th>';
echo '<th>Capacité</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $row['nom'] . '</td>';
    echo '<td>' . $row['capacite'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>