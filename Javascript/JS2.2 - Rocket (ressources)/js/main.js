'use strict';

/***********************************************************************************/
/* *********************************** DONNEES *************************************/
/***********************************************************************************/
/*const button = document.querySelector('#firing-button');

button.addEventListener('click', compteArebours);


/***********************************************************************************/
/* ********************************** FONCTIONS ************************************/
/***********************************************************************************/
/*//Au clic sur le bouton de mise à feu, le compte démarre. (10 a)
function compteArebours (){
    setInterval(function() {
         console.log(button);
   }, 1000);
}
//J'affiche les chiffres de 10 a 0
function affiche (button){

const number=document.querySelector('#billboard');

setTimeout(function() {
        
       clearInterval(compteArebours());
        
     }, 10000);
}
console.log (affiche());*/
/************************************************************************************/
/* ******************************** CODE PRINCIPAL **********************************/
/************************************************************************************/

const path = 'images/';
const button = document.querySelector('#firing-button');
const cancelButton = document.querySelector('#cancel-button');
let compteur = 3;
const span = document.querySelector('#billboard span');
let img = document.querySelector('#rocket');
const main = document.querySelector('main');
let starContainer = document.createElement('div');
starContainer.classList.add('stars');
let interval = '';

span.innerText = compteur;



document.addEventListener('DOMContentLoaded', () => {
    ajoutDetoiles();
    button.addEventListener('click', compteArebours);
    cancelButton.addEventListener('click', annulerDecollage);
});


    
function annulerDecollage() {
    this.classList.add('disabled');
    button.classList.remove('disabled');
    
    // clear interval
    clearInterval(interval);
    
    // remettre l'image d'origine.
    img.setAttribute('src', `${path}rocket1.png`);
    
}

function compteArebours() {
    cancelButton.classList.remove('disabled');
    this.classList.add('disabled');
    img.setAttribute('src', path + 'rocket2.gif');
    this.setAttribute('disabled', true);
    
    interval = setInterval( () => {
        
        if(compteur === 0) {
            cancelButton.classList.add('disabled');
            clearInterval(interval);
            return lancerDeFusee();
        }
        
        compteur--;
        
        span.innerText = compteur;
    }, 1000);
    
}

function lancerDeFusee() {
    img.classList.add('tookOff');
    img.setAttribute('src', path + 'rocket3.gif');
}



function ajoutDetoiles() {
    // choisir un nombre entre 0 et 2
    let nombre  = 0;
    
    for(let i = 0; i < 150; i++) {
        nombre = randomNumber(0, 2);
        
        starContainer.appendChild(creerEtoile(nombre));

         
    }
    
    main.appendChild(starContainer);
   
}


function creerEtoile(nombre) {
    
    let classes = ['tiny', 'normal', 'big'];
    
    let etoile = document.createElement('div');
    
   
    etoile.classList.add('star', classes[nombre]);
    
    etoile.style.top = `${randomNumber(0, window.innerHeight)}px`;
    etoile.style.left = `${randomNumber(0, window.innerWidth)}px`;
    
    return etoile;
    
}

function randomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}

