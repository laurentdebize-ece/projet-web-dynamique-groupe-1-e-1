<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Connexion.css">
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
	<title>Connexion</title>
</head>
<body>
	<div id="header">
		<h1>Omnes MySkills</h1>
	</div>
	<div id="section">
		<form class ="connexion">
			<fieldset>
				<legend>Connexion</legend><br>
				Email : <br><input type="text" name="email"> <br><br>
				Mot de passe :<br><input type="password" name="pass" id="pass"><br><br>
				<a href="Accueil.php">Envoyer</a><br><br><br><br>
				</a>
			</fieldset>
		</form>
	</div>
	<div id="footer">
		Droit d'auteur &copy; 2023 Omnes MySkills<br>
		Dernière mise à jour le 08/05/2023 | 
		<a href=mailto:scolarite.lyon@ece.fr>scolarite.lyon@ece.fr</a>
	
	</div>
</body>
</html>
