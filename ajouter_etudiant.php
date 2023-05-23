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


// Effectuer la requête d'insertion
$query = "INSERT INTO Etudiants (Nom, Prenom, Mail, MotDePasse, IdClasse) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$IdClasse')";
$result = $conn->query($query);

// Vérifier si l'insertion a réussi
if ($result === TRUE) {
    echo "Étudiant ajouté avec succès à la base de données.";
} else {
    echo "Erreur lors de l'ajout de l'étudiant : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>

</html>