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

$nom = $_POST['Nom'];
$prenom = $_POST['Prenom'];
$email = $_POST['Mail'];
$mot_de_passe = $_POST['MotDePasse'];


if (isset($_POST["Ajouter"])){

$query = "INSERT INTO Professeurs (Nom, Prenom, Mail, MotDePasse) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe')";
$result = $conn->query($query);

if ($result === TRUE) {
    echo "Professeur ajouté avec succès à la base de données.";
} else {
    echo "Erreur lors de l'ajout du professeur : " . $conn->error;
}
}

if (isset($_POST["Supprimer"])){

    $query = "DELETE FROM Etudiants WHERE Nom = '$nom' AND Prenom = '$prenom'AND Mail='$email' AND MotDePasse = '$mot_de_passe' AND IdClasse = '$IdClasse'";
    $result = $conn->query($query);

if ($result === TRUE) {
    echo "Professeur supprimé avec succès de la base de données.";
} else {
    echo "Erreur lors de la suppression du professeur : " . $conn->error;
}
}


$conn->close();
?>

</html>

