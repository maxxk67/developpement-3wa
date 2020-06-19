//Demander à l'utilisateur de saisir obligatoirement un nombre quoiqu'il arrive, afficher ce nombre ensuite en HTML.
//Détails

    //On peut saisir un nombre entier comme un nombre à virgule.
//L'utilisateur doit saisir obligatoirement un nombre quoi qu'il arrive.
let nombre =''

do { nombre = parseFloat(prompt("Veuillez Entrée un nombre")) ;}

while(isNaN(nombre));


document.write(nombre);

//if (typeof nombre === "string" ) {prompt("Veuillez entree un nombre")};
//else {alert("vous n'avez pas rentrée de nombre")};