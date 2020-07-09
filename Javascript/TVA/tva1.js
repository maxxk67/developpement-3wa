const TAUX_DE_TVA = 20.0;

const prixHT = parseFloat (prompt("Quel est le montant HT?")) ;

const montantTVA = (prixHT * TAUX_DE_TVA )/ 100;
console.log(montantTVA);
const montantTTC = montantTVA +prixHT;

document.write('Votre montant TTC ' + montantTTC + ' montant HT ' + prixHT + ' Taux de TVA: ' + TAUX_DE_TVA);