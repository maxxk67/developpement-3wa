

//cree le monde , 
//recuperer choix utilisateur;
const chifoumi = prompt("pierre, feuille, ciseaux").toLowerCase();
// recuperer ordinateur
let ordinateur =  Math.floor(Math.random() * 3);
console.log(ordinateur);
const choixOrdi = ['feuille', 'ciseaux', 'pierre'];

//comparer les variables
if (chifoumi === 'pierre' && choixOrdi[ordinateur] === 'pierre') { 
    alert("egalite");
    
} else if (chifoumi === 'pierre' && choixOrdi[ordinateur] === 'ciseaux') {
    alert('ordinateur gagne');
} else if (chifoumi === 'feuille' && choixOrdi[ordinateur] === 'pierre') {
        alert('ordinateur gagne');
} else if (chifoumi === 'ciseaux' && choixOrdi[ordinateur] === 'feuille') {
    alert('Vous avez gagner');
    
}


//afficher le résultat



    