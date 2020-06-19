// JS1.4 - Liste de Courses
// Enoncé

// Gérer une liste de courses en affichant les informations dans la console du navigateur web.
//     Créer des noms de fonctions clairs, en rapport avec la fonctionnalité implémentée

//La liste de courses est stockée dans une seule variable.
let listeDeCourses = ['sopalin', 'oranges', 'citrons', 'savon'];
let listeDeCoursesCopy = ['copie', 'sopalin', 'oranges', 'citrons', 'savon'];

// Ajouter un produit par son nom (crée fonction)
function ajouterUnProduitALaListe(produit) {
    listeDeCourses.push(produit);
}

ajouterUnProduitALaListe('pommes'); //appel de la fonction


//         Supprimer un produit ayant un nom spécifique
function supprimerUnSeulProduit(produit, liste) {
    
    // trouver index du produit a supprimer
    let index = liste.indexOf(produit);
    
    // Si l'article a supprimer != 0 ou > 0
    if(index >= 0) {
        // Supprimer le produit grace a son index
        return liste.splice(index, 1);
    }
    
    return document.write('L\'article n\'existe pas');
    
}

if(confirm('Souhaitez vous effacer un produit')) {
    let produit = prompt('Entrez le nom du produit');
    
    
    supprimerUnSeulProduit(produit, listeDeCourses);
}
//         Supprimer tous les produits

function supprimerTousLesProduitsDeLaListe() {
    listeDeCourses.length = 0;    
}

// supprimerTousLesProduitsDeLaListe();



/// Afficher la taille et le contenu de la liste <ul>
function afficherLeContenuDeLaListe(liste){ 
    //afficher le contenu du tableau
    
    document.write('<ul>');
    
    for(let produits of liste) {
       document.write(`<li>${produits}</li>`);
       
    }
    
    document.write('</ul>');

}

function tailleDeLaListe(liste) {
    //affiche la taille du tableau
    return liste.length;
}

document.write(`La Liste contient ${tailleDeLaListe(listeDeCourses)} articles`);
afficherLeContenuDeLaListe(listeDeCourses);


document.write(`La Liste contient ${tailleDeLaListe(listeDeCoursesCopy)} articles`);
afficherLeContenuDeLaListe(listeDeCoursesCopy);






//Les tableaux sont des objets de la classe Array, 
// s'appuyer sur des méthodes de cette classe pour implémenter les fonctionnalités

//Pour vérifier le bon fonctionnement du programme il faut écrire du code de test, par exemple :
//         Ajouter 4 produits simples puis afficher les informations
//         Demander à l'utilisateur de saisir le nom d'un produit, essayer de supprimer celui-ci puis afficher les informations
//         Supprimer tous les produits puis afficher les informations

