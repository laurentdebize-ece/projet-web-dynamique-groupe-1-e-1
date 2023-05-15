<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Accueil.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Accueil </title>
</head>
<body>
	<?php include("menu.php"); ?>
	<div id ="intro">
		<?php
			session_start();
			$conn = new mysqli('localhost', 'root', 'root', 'Omnes MySkills');
			$typeUtilisateur = $_SESSION["typeUtilisateur"];

			if (isset($_SESSION['id_etudiant']) && $typeUtilisateur == "etudiant") {
				$id_etudiant = $_SESSION['id_etudiant'];

				$query = "SELECT * FROM Etudiants WHERE IdEtudiant='$id_etudiant'";
				$result = $conn->query($query);

				if ($result->num_rows == 1) {
					$row = $result->fetch_assoc();
					$nom = $row['Nom'];
					$prenom = $row['Prenom'];
				}
			}
			else if (isset($_SESSION['id_professeur']) && $typeUtilisateur == "professeur") {
				$id_professeur = $_SESSION['id_professeur'];

				$query = "SELECT * FROM Professeurs WHERE IdProfesseur='$id_professeur'";
				$result = $conn->query($query);

				if ($result->num_rows == 1) {
					$row = $result->fetch_assoc();
					$nom = $row['Nom'];
					$prenom = $row['Prenom'];
				}
			}
			else if (isset($_SESSION['id_admin']) && $typeUtilisateur == "admin") {
				$id_admin = $_SESSION['id_admin'];

				$query = "SELECT * FROM Admin WHERE IdAdmin='$id_admin'";
				$result = $conn->query($query);

				if ($result->num_rows == 1) {
					$row = $result->fetch_assoc();
					$nom = $row['Nom'];
					$prenom = $row['Prenom'];
				}
			}
			echo "Bienvenue sur Omnes MySkills $prenom $nom. <br>";
		?>
		<p> Omnes MySkills est la plateforme en ligne officielle de l'ECE qui regroupe les élèves, les professeurs et les admins. Sur ce site, vous pourrez consulter vos matières et compétences à travers les différents onglets. Amusez-vous bien ! <p>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>
