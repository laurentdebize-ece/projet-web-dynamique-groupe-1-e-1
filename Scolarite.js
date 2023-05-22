function addStudent() {
        // Récupérer les données du nouvel étudiant depuis un formulaire
        var nom = "Nouveau Nom de l'étudiant";
        var prenom = "Nouveau Prénom de l'étudiant";

        // Envoyer les données à la base de données et actualiser le tableau
        // Exemple de requête AJAX avec jQuery :
        $.post("Scolarite.php", { action: "addStudent", nom: nom, prenom: prenom }, function(data) {
            // Actualiser le tableau des étudiants
            console.log("Nouvel étudiant ajouté !");
        });
    }

    function editStudent() {
        // Récupérer les données de l'étudiant à modifier depuis le tableau
        var nom = "Nom de l'étudiant à modifier";
        var prenom = "Prénom de l'étudiant à modifier";

        // Afficher un formulaire de modification avec les données existantes
        // et permettre à l'utilisateur de saisir les nouvelles valeurs

        // Envoyer les données modifiées à la base de données et actualiser le tableau
        // Exemple de requête AJAX avec jQuery :
        $.post("Scolarite.php", { action: "editStudent", nom: nom, prenom: prenom }, function(data) {
            // Actualiser le tableau des étudiants
            console.log("Étudiant modifié !");
        });
    }

    function deleteStudent() {
        // Récupérer les données de l'étudiant à supprimer depuis le tableau
        var nom = "Nom de l'étudiant à supprimer";
        var prenom = "Prénom de l'étudiant à supprimer";

        // Afficher une confirmation de suppression à l'utilisateur

        // Supprimer l'étudiant de la base de données et actualiser le tableau
        // Exemple de requête AJAX avec jQuery :
        $.post("Scolarite.php", { action: "deleteStudent", nom: nom, prenom: prenom }, function(data) {
            // Actualiser le tableau des étudiants
            console.log("Étudiant supprimé !");
        });
    }

    // Les fonctions pour les professeurs et les matières peuvent être définies de manière similaire
