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

  <?php include("footer.php"); ?>

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
  
  
  <div class="rectangle-container">
    <div class="rectangle" id="rectangle1">
      <p>Changer le mot de passe</p>
      <div class="image-carree"></div>
    </div>
    <div class="rectangle" id="rectangle2">
      <p>Changer l'adresse mail</p>
      <div class="image-carree"></div>
    </div>
  </div>
  

  <div id="password-form">
  <form method="post">
    <input type="password" name="new-password" placeholder="Nouveau mot de passe" required><br>
    <input type="password" name="confirm-password" placeholder="Confirmer le mot de passe" required><br>
    <input type="submit" value="Changer le mot de passe">
  </form>
</div>

<div id="email-form">
  <form method="post">
    <input type="email" name="new-email" placeholder="Nouvelle adresse email" required><br>
    <input type="email" name="confirm-email" placeholder="Confirmer l'adresse email" required><br>
    <input type="submit" value="Changer l'adresse email">
  </form>
</div>


<script>
  $(document).ready(function() {
    $("#rectangle1").click(function() {
      $(".rectangle").hide();
      $("#password-form").show();
    });
    $("#rectangle2").click(function() {
      $(".rectangle").hide();
      $("#email-form").show();
    });
  });
</script>


<div class="info">
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

  if ($_SESSION["typeUtilisateur"] == "étudiant") {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-password"])) {
      $newPassword = $_POST["new-password"];
      $confirmedPassword = $_POST["confirm-password"];

      if ($newPassword == $confirmedPassword) {
        $sql = "UPDATE etudiants SET MotDePasse = '$newPassword' WHERE IdEtudiant =  '$_SESSION[id_etudiant]'";
        if ($conn->query($sql) === TRUE) {
          echo "Mot de passe mis à jour avec succès !";
        } else {
          echo "Erreur lors de la mise à jour du mot de passe : " . $conn->error;
        }
      } else {
        echo "Les mots de passe ne correspondent pas !";
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-email"])) {
      $newEmail = $_POST["new-email"];
      $confirmedEmail = $_POST["confirm-email"];

      if ($newEmail == $confirmedEmail) {
        // Effectuer les actions nécessaires pour mettre à jour l'adresse email dans la base de données
        $sql = "UPDATE etudiants SET Mail = '$newEmail' WHERE IdEtudiant = '$_SESSION[id_etudiant]'";
        if ($conn->query($sql) === TRUE) {
          echo "Adresse email mise à jour avec succès !";
        } else {
          echo "Erreur lors de la mise à jour de l'adresse email : " . $conn->error;
        }
      } else {
        echo "Les adresses email ne correspondent pas !";
      }
    }
  } elseif ($_SESSION["typeUtilisateur"] == "admin") {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-password"])) {
      $newPassword = $_POST["new-password"];
      $confirmedPassword = $_POST["confirm-password"];

      if ($newPassword == $confirmedPassword) {
        $sql = "UPDATE admin SET MotDePasse = '$newPassword' WHERE IdAdmin =  '$_SESSION[id_admin]'";
        if ($conn->query($sql) === TRUE) {
          echo "Mot de passe mis à jour avec succès !";
        } else {
          echo "Erreur lors de la mise à jour du mot de passe : " . $conn->error;
        }
      } else {
        echo "Les mots de passe ne correspondent pas !";
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-email"])) {
      $newEmail = $_POST["new-email"];
      $confirmedEmail = $_POST["confirm-email"];

      if ($newEmail == $confirmedEmail) {
        // Effectuer les actions nécessaires pour mettre à jour l'adresse email dans la base de données
        $sql = "UPDATE admin SET Mail = '$newEmail' WHERE IdAdmin = '$_SESSION[id_admin]'";
        if ($conn->query($sql) === TRUE) {
          echo "Adresse email mise à jour avec succès !";
        } else {
          echo "Erreur lors de la mise à jour de l'adresse email : " . $conn->error;
        }
      } else {
        echo "Les adresses email ne correspondent pas !";
      }
    }
  } elseif ($_SESSION["typeUtilisateur"] == "professeur") {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-password"])) {
      $newPassword = $_POST["new-password"];
      $confirmedPassword = $_POST["confirm-password"];

      if ($newPassword == $confirmedPassword) {
        $sql = "UPDATE professeurs SET MotDePasse = '$newPassword' WHERE IdProfesseur =  '$_SESSION[id_professeur]'";
        if ($conn->query($sql) === TRUE) {
          echo "Mot de passe mis à jour avec succès !";
        } else {
          echo "Erreur lors de la mise à jour du mot de passe : " . $conn->error;
        }
      } else {
        echo "Les mots de passe ne correspondent pas !";
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new-email"])) {
      $newEmail = $_POST["new-email"];
      $confirmedEmail = $_POST["confirm-email"];

      if ($newEmail == $confirmedEmail) {
        // Effectuer les actions nécessaires pour mettre à jour l'adresse email dans la base de données
        $sql = "UPDATE professeurs SET Mail = '$newEmail' WHERE IdProfesseur = '$_SESSION[id_professeur]'";
        if ($conn->query($sql) === TRUE) {
          echo "Adresse email mise à jour avec succès !";
        } else {
          echo "Erreur lors de la mise à jour de l'adresse email : " . $conn->error;
        }
      } else {
        echo "Les adresses email ne correspondent pas !";
      }
    }
  }

  $conn->close();
  ?>
</div>


</body>

</html>
