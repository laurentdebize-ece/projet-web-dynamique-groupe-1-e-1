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
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "Omnes MySkills";

				$conn = new mysqli($servername, $username, $password, $dbname);

				session_start();
				if ($conn->connect_error) {
					die("Échec de la connexion : " . $conn->connect_error);
				}

				$sql = "SELECT Competences.Nom, Matieres.Nom AS MatiereNom, Niveau.Etat AS Eval, Evaluations.IdEtudiant AS Id
                    			FROM Competences
                    			INNER JOIN Matieres ON Competences.IdMatiere = Matieres.IdMatieres
					INNER JOIN Evaluations on Evaluations.IdCompetences = Competences.IdCompetences
					INNER JOIN Niveau ON Niveau.IdNiveau = Evaluations.IdNiveau
					INNER JOIN Etudiants on Etudiants.IdEtudiant = Evaluations.IdEtudiant
					WHERE Matieres.Nom = 'Mathématiques'
                    			ORDER BY Matieres.Nom ASC";

				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						if($_SESSION["id_etudiant"]==$row["Id"]){
						echo "<tr>";
						echo "<td>" . $row["Nom"] . "</td>";
						echo "<td>" . $row["MatiereNom"] . "</td>";
						echo "<td>" . $row["Eval"] . "</td>";
						echo "</tr>";
						}
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
