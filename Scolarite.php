<!DOCTYPE html>
<html id="general">
<head>
    <link rel="stylesheet" type="text/css" href="Scolarite.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <script src="Scolarite.js"></script>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scolarite</title>
</head>
<body>
    <?php include("menuadmin.php"); ?>
    <div class="tableau">
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "root";
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

        <div>
            <h2>Etudiants</h2>
            <button onclick="addStudent()">
                <img src="ajouter.png" alt="Ajouter">
            </button>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Action</th>
                </tr>
                <?php
                if ($result_etudiants->num_rows > 0) {
                    while ($row = $result_etudiants->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Nom"] . "</td>";
                        echo "<td>" . $row["Prenom"] . "</td>";
                        echo "<td>";
                        echo "<img src='modifier.png' alt='Modifier' onclick='editStudent()'>";
                        echo "<img src='supprimer.png' alt='Supprimer' onclick='deleteStudent()'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucun étudiant trouvé</td></tr>";
                }
                ?>
            </table>
        </div>

        <div>
            <h2>Professeurs</h2>
            <button onclick="addProfessor()">
                <img src="ajouter.png" alt="Ajouter">
            </button>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Action</th>
                </tr>
                <?php
                if ($result_professeurs->num_rows > 0) {
                    while ($row = $result_professeurs->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Nom"] . "</td>";
                        echo "<td>" . $row["Prenom"] . "</td>";
                        echo "<td>";
                        echo "<img src='modifier.png' alt='Modifier' onclick='editProfessor()'>";
                        echo "<img src='supprimer.png' alt='Supprimer' onclick='deleteProfessor()'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucun professeur trouvé</td></tr>";
                }
                ?>
            </table>
        </div>

        <div>
            <h2>Matières</h2>
            <button onclick="addSubject()">
                <img src="ajouter.png" alt="Ajouter">
            </button>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
                <?php
                if ($result_matieres->num_rows > 0) {
                    while ($row = $result_matieres->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Nom"] . "</td>";
                        echo "<td>";
                        echo "<img src='modifier.png' alt='Modifier' onclick='editSubject()'>";
                        echo "<img src='supprimer.png' alt='Supprimer' onclick='deleteSubject()'>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Aucune matière trouvée</td></tr>";
                }
                ?>
            </table>
        </div>
        
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
