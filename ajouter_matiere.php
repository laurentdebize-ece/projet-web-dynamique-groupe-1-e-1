<!DOCTYPE html>
<html id="general">

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Omnes MySkills";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}


$nom = $_POST['Nom'];
$volumehoraire = $_POST['VolumeHoraire'];

if (isset($_POST["Ajouter"])) {

    
$query = "INSERT INTO Matieres (Nom, VolumeHoraire) VALUES ('$nom', '$volumehoraire')";
$result = $conn->query($query);


if ($result === TRUE) {
    echo "Matiere ajoutée avec succès à la base de données.";
} else {
    echo "Erreur lors de l'ajout de la matiere : " . $conn->error;
}

}



$conn->close();
?>

</html>