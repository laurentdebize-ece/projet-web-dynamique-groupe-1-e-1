<!DOCTYPE html>
<html id="general">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Omnes MySkills";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer les valeurs du formulaire
$nom_professeur = $_POST['Nom'];
$prenom_professeur = $_POST['Prenom'];
$email = $_POST['Mail'];
$mot_de_passe = $_POST['MotDePasse'];


// Effectuer la requête de suppression
$query = "DELETE FROM Professeurs WHERE Nom = '$nom_professeur' AND Prenom = '$prenom_professeur'AND Mail='$email' AND MotDePasse = $mot_de_passe'";
$result = $conn->query($query);

// Vérifier si la suppression a réussi
if ($result === TRUE) {
    echo "Professeur supprimé avec succès de la base de données.";
} else {
    echo "Erreur lors de la suppression du professeur : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
</html>