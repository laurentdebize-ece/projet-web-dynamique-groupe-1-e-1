<!DOCTYPE html>
<html id="general">
<head>
    <link rel="stylesheet" type="text/css" href="Modification.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification</title>
</head>
<body>
    <?php include("menuadmin.php"); ?>

    <div class ="formulaire">
    <h2>Ajout d'un étudiant</h2>
    <form action="ajouter_etudiant.php" method="POST">
    <label for="Nom">Nom :</label>
        <input type="text" id="Nom" name="Nom" required>
        
        <label for="Prenom">Prénom :</label>
        <input type="text" id="Prenom" name="Prenom" required>
        
        <label for="Mail">Adresse e-mail :</label>
        <input type="Mail" id="Mail" name="Mail" required>
        
        <label for="MotDePasse">Mot de passe :</label>
        <input type="password" id="MotDePasse" name="MotDePasse" required>

        <label for="IdClasse">Classe :</label>
        <input type="text" id="IdClasse" name="IdClasse" required>

        <input type="submit" value="Ajouter">
        <input type="submit" value="Supprimer">
    </form>

    <h2>Ajout d'un professeur</h2>
    <form action="ajouter_professeur.php" method="POST">
        <label for="Nom">Nom :</label>
        <input type="text" id="Nom" name="Nom" required>
        
        <label for="Prenom">Prénom :</label>
        <input type="text" id="Prenom" name="Prenom" required>
        
        <label for="Mail">Adresse e-mail :</label>
        <input type="Mail" id="Mail" name="Mail" required>
        
        <label for="MotDePasse">Mot de passe :</label>
        <input type="password" id="MotDePasse" name="MotDePasse" required>
        
        <input type="submit" value="Ajouter">
        <input type="submit" value="Supprimer">
    </form>

    <h2>Ajout d'une matière</h2>
    <form action="ajouter_matiere.php" method="POST">
        <label for="Nom">Nom :</label>
        <input type="text" id="Nom" name="Nom" required>

        <label for="VolumeHoraire">Volume horaire :</label>
        <input type="text" id="VolumeHoraire" name="VolumeHoraire" required>

        <input type="submit" value="Ajouter">
        <input type="submit" value="Supprimer">
    </form>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
