//L'utilisateur saisit deux nombres ainsi que l'opération mathématique souhaitée, le résultat de cette opération s'affiche en HTML.

//Les opérations mathématiques acceptées sont :

 //  L'addition : a + b
   // La soustraction : a - b
   // La multiplication : a * b
   // La division : a / b
   // La puissance : a ^ b (exemple : 3 ^ 2 = 9)

//Détails

    //Il faut afficher une erreur en cas d'opération mathématique inconnue.
   // Les nombres saisis peuvent être à virgule.
   // L'utilisateur doit pouvoir autant saisir le nom de l'opération que l'opérateur correspondant : + - * / ^
    //Il faut répéter le moins de code possible, notamment le code d'affichage du résultat.

//Rappels

    //La division par zéro n'existe pas, il faut donc gérer ce cas...





//cree le monde
let a = '';
let b = '';
let result = '';

do {
    a = parseFloat(prompt("1er nombre"));
} while(isNaN(a));

const operateur =  (prompt("Operateur")) ;


do {
    b = parseFloat (prompt("2eme nombre"));
} while(isNaN(b));


//si le deuxième nombre est égale a zero division impossible

if (b == 0 && operateur == '/') {
    do {
        b = parseFloat (prompt("2eme nombre"));
    } while(b == 0 && operateur == '/');
}




//effectuer les calculs
switch (operateur) {

    case '+':
    case 'addition':
        result = a + b;
        break;
    
    case '-':
    case 'soustraction':
        result = a - b;
        break;
    
    case '*':
    case 'multiplication':
        result = a * b;
        break;
    
    case '/':
    case 'division':
        result = a / b;
        break;
    
    case '^':
    case 'puissance':
        result = a ** b;
        break;
        
    default:
        console.log("aucun nombre");
        break;
}

//affiche le resultat
document.write(result);
console.log(result);
