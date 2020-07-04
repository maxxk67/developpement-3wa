'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/


/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/


/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

let images = [
    {
        src: 'img/slides/1.jpg',
        caption: 'legende associée'
    },
    {
        src: 'img/slides/2.jpg',
        caption: 'legende associée 2'
    },
    {
        src: 'img/slides/3.jpg',
        caption: 'legende associée 3'
    },
    {
        src: 'img/slides/4.jpg',
        caption: 'legende associée 4'
    },
    {
        src: 'img/slides/5.jpg',
        caption: 'legende associée 5'
    },
    {
        src: 'img/slides/6.jpg',
        caption: 'legende associée 6'
    },
];

let buttonNext = document.querySelector('#button-next');
let buttonPrev = document.querySelector('#button-prev');
let buttonAuto = document.querySelector('#button-auto');
let buttonAleat = document.querySelector('#button-aleatoire');
let automatique = false;
let figure = document.querySelector('figure');
let index = 0;
let interval ='';

let img = figure.querySelector('img');
let caption = figure.querySelector('figcaption');

img.setAttribute('src', images[index].src);
caption.innerText = images[index].caption;


buttonNext.addEventListener('click', function() {
    // on passe a la photo suivante.
    photoSuivante();
});
buttonPrev.addEventListener('click', function() {
    // on passe a la photo precedente.
    photoPrecedente();
});

buttonAuto.addEventListener('click', function() {
    if(!automatique) {
        return startSlider();
    }
    
    stopSlider();
    
});

function startSlider() {
    interval = setInterval(function() {
        automatique = true;
        photoSuivante();
    }, 3000);
}

buttonAleat.addEventListener('click', function() {
   //change la photo aleatoirement
    randomPhoto();
});

document.addEventListener ('keydown',function (event) {
    // photo precedente lors de l'appuie sur la flèche droite du clavier
    if(event.code === 'ArrowRight') {
        stopSlider();
        photoSuivante();
    }
    
    if(event.code === 'ArrowLeft') {
        stopSlider();
        photoPrecedente();
    }
    
 });

function changeImage() {
    img.setAttribute('src', images[index].src);
    caption.innerText = images[index].caption;
}

function photoSuivante() {
  // Afficher prochain element de la liste (index suivant 0 a 1)
    changeImage();
    //fait index plus 1
    index++;
    if (index === images.length  ) {
       index=0 ;
//stop de defilement automatique
   stopSlider();
    }
    // attention a l'index, si il depasse celui du tableau, le remettre a zéro.
}
console.log([index]);
console.log(buttonNext);

console.log(images);

function photoPrecedente () {
    changeImage();
    //fait index moins 1
    index--;
     if (index <0 ) {
       index=images.length -1; //longeur maximal du tableau -1 
        //stop de defilement automatique
   stopSlider();
    }
    
    console.log(buttonPrev);
}

function randomPhoto() {
index = getRandomInteger(0, images.length - 1);
    
    changeImage();
}

function stopSlider() {
    
    if(interval != '') {
        clearInterval(interval);
        interval = '';
        automatique = false;
    }
    
}

function listeDeDots() {
    
    for(let i = 0; i <= images.length -1; i++) {
        creeUnDot(i);
    }
}

function creeUnDot(index) {
    const dot = document.createElement('li');
    
    dot.classList.add('dot');
    
    // assigner l'index au data-index des lis
    
    // ajouter un data-index aux lis et lui assigner l'index comme valeur
    
    // => la recherche a faire:  set custom attribute JS
    
    dot.setAttribute('data-index', index);
    
    document.querySelector('#dots').appendChild(dot); //appel l'enfant de l'id Dots
}


document.addEventListener('DOMContentLoaded', () => {  // au chargement de la page
   listeDeDots();
   
   
   let dots = Array.from(document.querySelectorAll('#dots li'));
   
  dots.forEach(dot => {
        dot.addEventListener('click', function() {
            // index = this.dataset.index;
            index = this.getAttribute('data-index');
            changeImage();
   });
});

});