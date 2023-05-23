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
$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$email = $_POST['Mail'];
$mot_de_passe = $_POST['MotDePasse'];
$IdClasse = $_POST['IdClasse'];



// Effectuer la requête de suppression
$query = "DELETE FROM Etudiants WHERE Nom = '$nom' AND Prenom = '$prenom'AND Mail='$email' AND MotDePasse = '$mot_de_passe' AND IdClasse = '$IdClasse'";
$result = $conn->query($query);

// Vérifier si la suppression a réussi
if ($result === TRUE) {
    echo "Étudiant supprimé avec succès de la base de données.";
} else {
    echo "Erreur lors de la suppression de l'étudiant : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
</html>