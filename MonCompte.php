<!DOCTYPE html>
<html id="general">

<head>
  <link rel="stylesheet" type="text/css" href="MonCompte.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Mon Compte</title>
</head>

<body>
  <?php
  session_start();
  $typeUtilisateur = $_SESSION["typeUtilisateur"];
  if ($typeUtilisateur == "admin") {
    include("menuadmin.php");
  } else {
    include("menu.php");
  }
  ?>
  <div class="info">
    <p> Informations du compte : </p> <br>
    <ul>
      <li> Type d'utilisateur :
        <?php echo "$typeUtilisateur"; ?>
      </li>
      <li> Nom :
        <?php echo $_SESSION["nom"]; ?>
      </li>
      <li>Prénom :
        <?php echo $_SESSION["prenom"]; ?>
      </li>
      <li>Mail :
        <?php echo $_SESSION["mail"]; ?>
      </li>
    </ul>
    <img src="parametre.png" alt="Image parametre" class="small-image">
  </div>
  <?php include("footer.php"); ?>
  <div class="rectangle-container">
    <div class="rectangle">
      <p>Changer le mot de passe </p>
      <div class="image-carree"></div>
    </div>
    <div class="rectangle 2">
      <p>Changer l'adresse mail</p>
      <div class="image-carree"></div>
    </div>
  </div>

  <?php
  // Connexion à la base de données
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Omnes MySkills";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["password"];
    $confirmedPassword = $_POST["confirm-password"];

 
    if ($newPassword == $confirmedPassword) {
      
      $sql = "UPDATE nom_table SET MotDePasse = '$newPassword' WHERE IdEtudiant =  '$_SESSION[id_etudiant]'";
      if ($conn->query($sql) === TRUE) {
        echo "Mot de passe mis à jour avec succès !";
      } else {
        echo "Erreur lors de la mise à jour du mot de passe : " . $conn->error;
      }
    } else {
      echo "Les mots de passe ne correspondent pas !";
    }
  }

  $conn->close();
  ?>
</body>

</html>
