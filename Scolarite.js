function addStudent() {
        var nom = "Nouveau Nom de l'étudiant";
        var prenom = "Nouveau Prénom de l'étudiant";

        // Exemple de requête AJAX avec jQuery :
        $.post("Scolarite.php", { action: "addStudent", nom: nom, prenom: prenom }, function(data) {
            // Actualiser le tableau des étudiants
            console.log("Nouvel étudiant ajouté !");
        });
    }

    function editStudent() {
        var nom = "Nom de l'étudiant à modifier";
        var prenom = "Prénom de l'étudiant à modifier";


        // Exemple de requête AJAX avec jQuery :
        $.post("Scolarite.php", { action: "editStudent", nom: nom, prenom: prenom }, function(data) {
            // Actualiser le tableau des étudiants
            console.log("Étudiant modifié !");
        });
    }

    function deleteStudent() {
        var nom = "Nom de l'étudiant à supprimer";
        var prenom = "Prénom de l'étudiant à supprimer";

       

     
        $.post("Scolarite.php", { action: "deleteStudent", nom: nom, prenom: prenom }, function(data) {
            // Actualiser le tableau des étudiants
            console.log("Étudiant supprimé !");
        });
    }



    function showForm(formId) {
        // Masquer formulaires
        var forms = document.getElementsByClassName("add-form");
        for (var i = 0; i < forms.length; i++) {
            forms[i].style.display = "none";
        }
    
    
        var form = document.getElementById(formId);
        form.style.display = "block";
    }
    


const addStudentForm = document.getElementById('addStudentForm');



addStudentForm.addEventListener('submit', function(event) {
    event.preventDefault(); 


    const studentName = document.getElementById('studentName').value;
    const studentFirstName = document.getElementById('studentFirstName').value;

 
    addStudentForm.reset();
});
