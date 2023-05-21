<!DOCTYPE html>
<html id="general">
<head>
    <link rel="stylesheet" type="text/css" href="MonCompte.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Compte</title>
</head>
<body>
	<?php include("menu.php"); ?>
     <div class="info">
        <?php
			session_start();
			$typeUtilisateur = $_SESSION["typeUtilisateur"];
        ?>
        <label> Type d'utilisateur : <?php echo "$typeUtilisateur";?> </label> <br> <br> 
        <label>Nom : <?php echo $_SESSION["nom"]; ?></label> <br>
		<label>Prénom : <?php echo $_SESSION["prenom"]; ?></label> <br>
		<label>Mail : <?php echo $_SESSION["mail"]; ?></label> <br>
        <img src="parametre.png" alt="Image parametre" class="small-image">
    </div>
    <?php include("footer.php"); ?>
</body>
</html>