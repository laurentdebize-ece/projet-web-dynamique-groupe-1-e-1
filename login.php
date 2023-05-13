<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Vérifier si l'email et le mot de passe sont corrects dans la base de données
    $conn = new mysqli('localhost', 'root', 'root', 'Omnes MySkills');
    $query = "SELECT * FROM Etudiants WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // L'utilisateur est authentifié, enregistrer l'identifiant de l'utilisateur dans la session
        $row = $result->fetch_assoc();
        $_SESSION["id_etudiant"] = $row["IdEtudiant"];

        // Rediriger l'utilisateur vers la page d'accueil
        header("Location: Accueil.php");
        exit();
    } else {
        // Afficher une alerte si les informations de connexion sont incorrectes
        echo "<script>alert('Identifiant ou mot de passe incorrect.');</script>";
        header("Refresh:0; url=Connexion.php");
        exit();
    }

    $conn->close();
}
?>