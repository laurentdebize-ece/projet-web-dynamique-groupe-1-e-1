<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Matières.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Matières </title>
</head>
<body>
	<?php include("menu.php"); ?>
	<div id= "section">
		hadbzazdjbjhvjgvkhgvgcjhfccjfjbkjhvkjblahjzdbd
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
