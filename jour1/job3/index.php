<!DOCTYPE html>
<html>
<head>
	<title>Variables PHP</title>
</head>
<body>

<?php
// Créer des variables de différents types primitifs
$bool = true;
$int = 42;
$str = "Hello";
$float = 3.14;

// Afficher un tableau HTML avec les informations sur les variables
echo "<table>
		<thead>
			<tr>
				<th>Type</th>
				<th>Nom</th>
				<th>Valeur</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Boolean</td>
				<td>bool</td>
				<td>" . ($bool ? 'true' : 'false') . "</td>
			</tr>
			<tr>
				<td>Integer</td>
				<td>int</td>
				<td>$int</td>
			</tr>
			<tr>
				<td>String</td>
				<td>str</td>
				<td>$str</td>
			</tr>
			<tr>
				<td>Float</td>
				<td>float</td>
				<td>$float</td>
			</tr>
		</tbody>
	</table>";
?>

</body>
</html>
