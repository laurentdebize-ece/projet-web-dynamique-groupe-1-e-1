<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $conn = new mysqli('localhost', 'root', 'root', 'Omnes MySkills');
    $query = "SELECT * FROM Etudiants WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["id_etudiant"] = $row["IdEtudiant"];
        $_SESSION["nom"] = $row["Nom"];
        $_SESSION["prenom"] = $row["Prenom"];
        $_SESSION["mail"] = $row["Mail"];
        $_SESSION["id_classe"] = $row["IdClasse"];
        $_SESSION["typeUtilisateur"] = "étudiant";
        $_SESSION["matiere"] = 0;

        header("Location: Accueil.php");
        exit();
    }

    $query = "SELECT * FROM Professeurs WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["id_professeur"] = $row["IdProfesseur"];
        $_SESSION["nom"] = $row["Nom"];
        $_SESSION["prenom"] = $row["Prenom"];
        $_SESSION["mail"] = $row["Mail"];
        $_SESSION["typeUtilisateur"] = "professeur";

        header("Location: Accueil.php");
        exit();
    }

    $query = "SELECT * FROM Admin WHERE Mail='$email' AND MotDePasse='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["id_admin"] = $row["IdAdmin"];
        $_SESSION["nom"] = $row["Nom"];
        $_SESSION["prenom"] = $row["Prenom"];
        $_SESSION["mail"] = $row["Mail"];
        $_SESSION["typeUtilisateur"] = "admin";

        header("Location: Accueil.php");
        exit();
    }

    echo "<script>alert('Identifiant ou mot de passe incorrect.');</script>";
    header("Refresh:0; url=Connexion.php");
    exit();

    $conn->close();
}
?>