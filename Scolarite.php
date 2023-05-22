<!DOCTYPE html>
<html id="general">
<head>
	<link rel="stylesheet" type="text/css" href="Scolarite.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Scolarite </title>
</head>
<body>
	<?php include("menuadmin.php"); ?>
    <div class ="tableau">

    <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Omnes MySkills";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Échec de la connexion à la base de données : " . $conn->connect_error);
        }

        // étudiants
        $query_etudiants = "SELECT Nom, Prenom FROM Etudiants";
        $result_etudiants = $conn->query($query_etudiants);

        // professeurs
        $query_professeurs = "SELECT Nom, Prenom FROM Professeurs";
        $result_professeurs = $conn->query($query_professeurs);

        // matières
        $query_matieres = "SELECT Nom FROM Matieres";
        $result_matieres = $conn->query($query_matieres);

        $conn->close();
    ?>

    <h2>Etudiants</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        <?php
        if ($result_etudiants->num_rows > 0) {
            while ($row = $result_etudiants->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nom"] . "</td>";
                echo "<td>" . $row["Prenom"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Aucun étudiant trouvé</td></tr>";
        }
        ?>
    </table>

    <h2>Professeurs</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        <?php
        if ($result_professeurs->num_rows > 0) {
            while ($row = $result_professeurs->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nom"] . "</td>";
                echo "<td>" . $row["Prenom"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Aucun professeur trouvé</td></tr>";
        }
        ?>
    </table>

    <h2>Matières</h2>
    <table>
        <tr>
            <th>Nom</th>
        </tr>
        <?php
        if ($result_matieres->num_rows > 0) {
            while ($row = $result_matieres->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nom"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td>Aucune matière trouvée</td></tr>";
        }
        ?>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>


	
	


