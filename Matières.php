<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Matières.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php

	$conn = new mysqli('localhost', 'root', 'root', 'Omnes MySkills');

	$sql = "SELECT * FROM Etudiants";
	$result = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["IdEtudiant"] . " - Prénom: " . $row["Prenom"] . " - Nom: " . $row["Nom"] . " - mail: " . $row["Mail"] . " - Numéro de classe: " . $row["IdClasse"] . "<br>" ;
    }

	$conn->close();
	?>
	<title> Matières </title>
</head>
<body>
	<div id="nav">
		<div><a href ="Accueil.php">Accueil</a></div>
		<div class ="matieres"><a href = "Matières.php">Matières</a></div>
		<div><a href ="MesCompétences.php">Mes compétences</a></div>
		<div> <a href ="MonCompte.php">Mon compte</a></div>
		<div><a href ="Connexion.php">Deconnexion</a></div>
	</div>
	<div id="header">
		<img src="/Applications/MAMP/htdocs/projet-web-dynamique-groupe-1-e-1/images/ece.png" height="100" id="img">
		<h1>Omnes MySkills</h1>
	</div>

    <div class="intro"> Vous êtes sur la page des Matières ! </div>

	<div id="section">
	</div>
	<div id="footer">
		Droit d'auteur &copy; 2023 Omnes MySkills<br>
		Dernière mise à jour le 08/05/2023 | 
		<a href=mailto:scolarite.lyon@ece.fr>scolarite.lyon@ece.fr</a>
	</div>
</body>
</html>

