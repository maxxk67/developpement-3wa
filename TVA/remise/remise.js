const TAUX_DE_TVA = 20.0;

do { prixHT = parseFloat(prompt("Quel est le montant HT?")) ;
// gerer les minuscules et les majuscules : recherche des methodes tolowercase et touppercase

} while(isNaN(prixHT)); 
// boucle do_while permet d'obliger l'utilisateur à rentrer un nombre.

do { 
    reduction = prompt("Beneficiez-vous d\'une remise?").toLowerCase();

} while (reduction !== 'oui' && reduction !== 'non');

//la boucle do while permet de revenir temps que les conditions ne sont pas réunis. 

//reduction.toLowerCase(); //converti majuscule en minuscule

// si il y a une remise 

if ( (reduction === "oui") || (reduction === "yes") ) {
    
    do { 
        remise = parseFloat(prompt("Entree le pourcentage de la remise?"));
    } while  (isNaN(remise));
    
    const montantRemise = (prixHT * remise) / 100;
    
    prixHT = prixHT - montantRemise;
   
    document.write('<p>'+'Vous avez beneficier d\'une remise de' + remise + '%'  +'</p>');
}
//sinon
else {document.write('aucune remise n\'a etait applique')};


const montantTVA = (prixHT * TAUX_DE_TVA ) / 100;
console.log(montantTVA);
const montantTTC = montantTVA + prixHT;
console.log(montantTTC);
document.write('<p>Votre montant TTC ' + montantTTC + '</p><p> montant HT ' + prixHT + '</p><p> Taux de TVA: ' + TAUX_DE_TVA + '</p>');