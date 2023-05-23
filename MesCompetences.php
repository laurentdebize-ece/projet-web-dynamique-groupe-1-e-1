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
	<div class="intro">
        bonjour
        <?php
			session_start();
		?>
		<div> <?php echo $_SESSION["typeUtilisateur"]; ?> </div>
		<div> <?php echo $_SESSION["matiere"]; ?> </div> <br>
    </div>
</body>
</html>
