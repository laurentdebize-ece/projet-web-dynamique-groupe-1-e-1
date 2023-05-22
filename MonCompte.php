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
    <?php
		session_start();
		$typeUtilisateur = $_SESSION["typeUtilisateur"];
        if($typeUtilisateur == "admin"){
        include("menuadmin.php"); 
        }
        else{
            include("menu.php");
        }
    ?>
    <div class="info">
        <p> Informations du compte : </p> <br> 
        <ul>
            <li> Type d'utilisateur : <?php echo "$typeUtilisateur";?> </li>
            <li> Nom : <?php echo $_SESSION["nom"]; ?> </li>
            <li>Prénom : <?php echo $_SESSION["prenom"]; ?></li> 
            <li>Mail : <?php echo $_SESSION["mail"]; ?></li>
        </ul>
        <img src="parametre.png" alt="Image parametre" class="small-image">
    </div>
    <?php include("footer.php"); ?>
</body>
</html>