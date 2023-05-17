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
		?>
		<label> Bienvenue sur Omnes MySkills <?php echo $_SESSION["prenom"] . ' ' . $_SESSION["nom"]; ?></label> <br>
		<p> Omnes MySkills est la plateforme en ligne officielle de l'ECE qui regroupe les élèves, les professeurs et les admins. Sur ce site, vous pourrez consulter vos matières et compétences à travers les différents onglets. Amusez-vous bien ! <p>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>