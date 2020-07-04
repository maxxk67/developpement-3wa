'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* *********************************** FONCTIONS UTILITAIRES *********************************** */
/*************************************************************************************************/

function getNumberBetween(min, max) {
    return parseInt(Math.floor(Math.random() * (max - min + 1)) + min);
}

function lancerDeDes(nbrDes, nbrFaces) {
    let resultat = 0 ;
    let min = 1;
    
    for(let i = 0; i < nbrDes; i++) {
        resultat += parseInt(getNumberBetween(min, nbrFaces));
    }
    
    return resultat;
}

function afficheLesPv (player,dragon){
    document.write("<p> Le dragon a </p>" + dragon.pointDeVie);
    document.write("<p> Le player a </p>" + player.pointDeVie);}

//calcul du point de dommage en fonction du niveau de difficulté //
function pointDeDommage (player) {
    let dommage = lancerDeDes(3, 6);
    if (difficulte === 'facile'){
        (lancerDeDes(2, 6)*6/100)+dommage
        }
        else if (difficulte === 'difficile') {
            dommage - (lancerDeDes(1, 6)*6/100)
        }
        }



// 	Calcul de l'initiative : chaque personnage lance 10Des a 6 faces. 
function determineInitiative(player, dragon) {
    // determiner initiative de chacun
    do {
        player.initiative = lancerDeDes(10, 6);
        dragon.initiative = lancerDeDes(10, 6);    
    } while(player.initiative === dragon.initiative);
    
    
    // si dragon initiativ > player
    //      dragon commence
    // sinon
    //      player commence
    let initiative = 'player';
    
    if(dragon.initiative > player.initiative) {
        initiative = 'dragon'
    } 
    
    return initiative;
}