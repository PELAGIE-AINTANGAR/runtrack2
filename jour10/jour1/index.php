<?php

//connexion a la base de donnees

$servername = 'localhost';
$username = 'root';
$password = 'root';
// connexion a la base de donnees avec PDO
$conn = new PDO("mysql:host=$servername;dbname=jour9", $username, $password);
// requete pour recuperer les informations de la tables etudiants
$sql = "SELECT * FROM etudiants";
$resultat = $conn->query($sql);
// affichage des informations de la table etudiants
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Identifiant</th>';
echo '<th>Prénom</th>';
echo '<th>Nom</th>';
echo '<th>Naissance</th>';
echo '<th>Sexe</th>';
echo '<th>E-mail</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';


while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['prenom'] . '</td>';
    echo '<td>' . $row['nom'] . '</td>';
    echo '<td>' . $row['naissance'] . '</td>';
    echo '<td>' . $row['sexe'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
// Fermeture de la connexion à la base de données
$conn = null;

?>