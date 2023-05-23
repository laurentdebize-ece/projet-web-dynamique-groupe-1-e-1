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
$prenom = $_POST['Prenom'];
$email = $_POST['Mail'];
$mot_de_passe = $_POST['MotDePasse'];
$IdClasse = $_POST['IdClasse'];

if (isset($_POST["Ajouter"])){

$query = "INSERT INTO Etudiants (Nom, Prenom, Mail, MotDePasse, IdClasse) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$IdClasse')";
$result = $conn->query($query);

if ($result === TRUE) {
    echo "Étudiant ajouté avec succès à la base de données.";
} else {
    echo "Erreur lors de l'ajout de l'étudiant : " . $conn->error;
}
}

if (isset($_POST["Supprimer"])){

$query = "SELECT * FROM Evaluations WHERE IdEtudiant IN (SELECT IdEtudiant FROM Etudiants WHERE Nom = '$nom_etudiant' AND Prenom = '$prenom_etudiant' AND Mail = '$email' AND MotDePasse = '$mot_de_passe' AND IdClasse = '$IdClasse')";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Supprimer d'abord les évaluations associées à l'étudiant
    $query = "DELETE FROM Evaluations WHERE IdEtudiant IN (SELECT IdEtudiant FROM Etudiants WHERE Nom = '$nom_etudiant' AND Prenom = '$prenom_etudiant'AND Mail = '$email' AND MotDePasse = '$mot_de_passe' AND IdClasse = '$IdClasse')";
    $result = $conn->query($query);

    if ($result === FALSE) {
        echo "Erreur lors de la suppression des évaluations : " . $conn->error;
        $conn->close();
        exit;
    }
}

    $query = "DELETE FROM Etudiants WHERE Nom = '$nom' AND Prenom = '$prenom'AND Mail='$email' AND MotDePasse = '$mot_de_passe' AND IdClasse = '$IdClasse'";
    $result = $conn->query($query);

if ($result === TRUE) {
    echo "Étudiant supprimé avec succès de la base de données.";
} else {
    echo "Erreur lors de la suppression de l'étudiant : " . $conn->error;
}
}


$conn->close();
?>

</html>

