<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="MesCompetences.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Mes Compétences </title>
</head>
<body>
	<?php include("menu.php"); ?>
	<?php include("footer.php"); ?>
	
	<div class="container">
		<h2>Mes Compétences</h2><br><br>
		<table>
			<thead>
				<tr>
					<th>Compétence</th>
					<th>Matière</th>
					<th>État</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Connexion à la base de données
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "Omnes MySkills";

				$conn = new mysqli($servername, $username, $password, $dbname);

				// Vérifier la connexion
				if ($conn->connect_error) {
					die("Échec de la connexion : " . $conn->connect_error);
				}

				// Requête SQL pour récupérer les compétences triées par matière
				$sql = "SELECT Competences.Nom, Matieres.Nom AS MatiereNom
                    FROM Competences
                    INNER JOIN Matieres ON Competences.IdMatiere = Matieres.IdMatieres
                    WHERE Matieres.Nom = 'Physique'
                    ORDER BY Matieres.Nom ASC";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["Nom"] . "</td>";
						echo "<td>" . $row["MatiereNom"] . "</td>";
						echo "<td>","Non évalué","</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='2'>Aucune compétence trouvée</td></tr>";
				}

				$conn->close();
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
