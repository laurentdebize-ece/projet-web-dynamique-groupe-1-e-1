<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Vérifier si l'utilisateur est un étudiant
    $conn = new mysqli('localhost', 'root', 'root', 'Omnes MySkills');
    $query = "SELECT * FROM Etudiants WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // L'utilisateur est un étudiant, enregistrer l'identifiant de l'utilisateur dans la session
        $row = $result->fetch_assoc();
        $_SESSION["id_etudiant"] = $row["IdEtudiant"];
    
        // Rediriger l'utilisateur vers la page d'accueil des étudiants
        header("Location: Accueil.php");
        exit();
    }

    // Vérifier si l'utilisateur est un professeur
    $query = "SELECT * FROM Professeurs WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // L'utilisateur est un professeur, enregistrer l'identifiant de l'utilisateur dans la session
        $row = $result->fetch_assoc();
        $_SESSION["id_professeur"] = $row["IdProfesseur"];

        // Rediriger l'utilisateur vers la page d'accueil des professeurs
        header("Location: Accueil.php");
        exit();
    }

    // Vérifier si l'utilisateur est un admin
    $query = "SELECT * FROM Admin WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // L'utilisateur est un admin, enregistrer l'identifiant de l'utilisateur dans la session
        $row = $result->fetch_assoc();
        $_SESSION["id_admin"] = $row["IdAdmin"];

        // Rediriger l'utilisateur vers la page d'accueil des admins
        header("Location: Accueil.php");
        exit();
    }

    // Aucun utilisateur trouvé avec l'adresse e-mail et le mot de passe fournis, afficher un message d'erreur
    echo "<script>alert('Identifiant ou mot de passe incorrect.');</script>";
    header("Refresh:0; url=Connexion.php");
    exit();

    $conn->close();
}
?>
