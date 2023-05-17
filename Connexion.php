<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Connexion.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
	<style>
		#section {
			color: white;
		}
	</style>
</head>
<body>
	<div id="header">
		<h1>Omnes MySkills</h1>
	</div>
	<div id="section">
		<div class ="connexion">
			<fieldset>
			<legend>Connexion</legend><br>
			<form action="login.php" method="post">
				Email : <br><input type="text" name="email" maxlenght=30 size=35> <br><br>
				Mot de passe :<br><input type="password" name="pass" id="pass" maxlenght=30 size=35><br><br>
				<input type="submit" name="submit" value="Envoyer"><br><br><br><br>
			</form>
			</fieldset>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>
