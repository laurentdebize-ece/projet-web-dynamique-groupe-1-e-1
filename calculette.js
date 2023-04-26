var expression = "";

function ajouter(caractere) {
	expression += caractere;
	document.getElementById("resultat").value = expression;
}
function calculer() {
	try {
		var resultat = eval(expression);
		document.getElementById("resultat").value = resultat;
		expression = resultat;
	} catch(err) {
		document.getElementById("resultat").value = "Erreur";
		expression = "";
	}
}
function effacer() {
	expression = "";
	document.getElementById("resultat").value = "";
}