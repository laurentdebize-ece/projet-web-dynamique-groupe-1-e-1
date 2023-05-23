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


// Effectuer la requête de suppression
$query = "DELETE FROM Matieres WHERE Nom = '$nom' AND VolumeHoraire = '$volumehoraire'";
$result = $conn->query($query);

// Vérifier si la suppression a réussi
if ($result === TRUE) {
    echo "Matiere supprimée avec succès de la base de données.";
} else {
    echo "Erreur lors de la suppression de la matiere : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
</html>