'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* **************************************** DONNEES JEU **************************************** */
/*************************************************************************************************/
/*pions = objets il s'agit du dragon et du joueur */

const player = {
    nom: 'player',
    pointDeVie: 100,
    initiative: 0,
    attaque: function (nbrDes =3, nbrFaces=6,) {
        return lancerDeDes (nbrDes, nbrFaces);
    }
};
const dragon = {
    nom: 'dragon',
    pointDeVie: 100,
    initiative : 0,
     attaque: function (nbrDes =3, nbrFaces=6,) {
        return lancerDeDes (nbrDes, nbrFaces);
    }
};
/* demandez a l'utilisateur la diffuclté de niveau */
// const difficulte = prompt('Entrez le niveau de difficulte ');
const difficulte = 'facile';
/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/





/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
/*Calcul des points de vie de chaque joueurs(pions) */
dragon.pointDeVie += lancerDeDes(5, 10);
// 	* PV joueur : 100 + 10D10
player.pointDeVie += lancerDeDes(10, 10);

/* calcul en fonction du niveau de difficulté */
const nbrFaces = 10;
let nbrDesDragons = 0;
let nbrDesJoueur = 0;

if(difficulte === 'facile') {
    nbrDesDragons = 5;
    nbrDesJoueur = 10
} else if(difficulte === 'normal') {
    nbrDesDragons = 10;
    nbrDesJoueur = 10;
} else if(difficulte === 'difficile') {
    nbrDesDragons = 10;
    nbrDesJoueur = 7;
} else {
    console.error('Erreur.');
}

//on déterime qui attaque le premier //


//les attaques (qui attaque?)//
//si player est supérieur a dragon il attaque, sinon l'inverse

function tourDeJeu () {
    const resultat = determineInitiative(player, dragon);
    if (resultat === 'player') {
        dragon.pointDeVie = dragon.pointDeVie - player.attaque();
        player.pointDeVie = player.pointDeVie - dragon.attaque();
    } else {
        player.pointDeVie = player.pointDeVie - dragon.attaque();
        dragon.pointDeVie = dragon.pointDeVie - player.attaque();
    }
    
    console.table(player);
    console.table(dragon);
}

//temps que personne n'est pas a zero le jeu continue
while(player.pointDeVie >= 0 && dragon.pointDeVie >= 0 ) {
    
    if (player.pointDeVie <= 0 || dragon.pointDeVie <= 0 ) {
        document.write("<strong>Fin de partie!</strong>");
        
    } else {
        tourDeJeu();
    
    }
}


 // J'Affichage le numéro du tour
 
 
	//J' Affichage  qui a attaqué et combien de points de dommages il a infligé
	
	// J'Affichage  l'état du jeu
