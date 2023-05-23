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


// Effectuer la requête d'insertion
$query = "INSERT INTO Professeurs (Nom, Prenom, Mail, MotDePasse) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe')";
$result = $conn->query($query);

// Vérifier si l'insertion a réussi
if ($result === TRUE) {
    echo "Professeur ajouté avec succès à la base de données.";
} else {
    echo "Erreur lors de l'ajout du professeur : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>

</html>