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
$volumehoraire = $_POST['VolumeHoraire'];


// Effectuer la requête d'insertion
$query = "INSERT INTO Matieres (Nom, VolumeHoraire) VALUES ('$nom', '$volumehoraire')";
$result = $conn->query($query);

// Vérifier si l'insertion a réussi
if ($result === TRUE) {
    echo "Matiere ajoutée avec succès à la base de données.";
} else {
    echo "Erreur lors de l'ajout du professeur : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>

</html>