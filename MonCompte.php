<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="MonCompte.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Mon Compte </title>
</head>
<body>
	<?php include("menu.php"); ?>
	<div id ="introduction">
	<p>hadbzazdjbjhvjgvkhgvgcjhfccjfjbkjhvkjblahjzdbd</p>
		<?php
			session_start();
			$conn = new mysqli('localhost', 'root', 'root', 'Omnes MySkills');
			$typeUtilisateur = $_SESSION["typeUtilisateur"];
			echo "bonjour $typeUtilisateur";
		?>
		
	</div>
	<?php include("footer.php"); ?>
</body>
</html>