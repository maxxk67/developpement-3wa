/*    Demander à l'utilisateur de saisir la taille de la table des multiplications (exemple : si on saisit 10 il faut faire une table de 1 à 10).
    Il faut utiliser les balises HTML de tableaux pour construire l'affichage.
    Pour l'affichage, lorsque le nombre est multiplié par lui-même (1x1, 2x2, 3x3, etc.), la cellule du tableau HTML doit s'afficher d'une autre couleur que les autres cellules. La solution doit être en CSS.

*/


let number =''

do { number = parseFloat(prompt("Veuillez Entrée un nombre")) ;}

while(isNaN(number));
 
// J'ouvre une balise table
document.write('<table>');
//
// initialize une boucle avec le nombre de l'utilisateur
// le nombre va determiner la longueur de la boucle
//  cette boucle sert a generer des balises HTML qui se repetent.
for(let i = 0; i <= number; i++) {
    // si number est egal a 5, je genere 5 <tr></tr>
    document.write('<tr>');
        // Ici je dois genere les <td></td>
        // Le nombre de td est determine par number aussi
        //  si on saisit 10 il faut faire une table de 1 à 10.
    for (let j = 0; j <= number; j++) {
    
        // Si le nombre est multiplie par lui meme
        //      On affiche un td avec un class CSS
        // Sinon
        //      On affiche un td normal
        document.write('<td>');
        document.write(i * j);
        document.write('</td>');
       
        
    }
    
    document.write('</tr>');
}
    
document.write('</table>');