// Interactions

//     Quand on clique sur le bouton toggle-rectangle, cela cache ou affiche le rectangle.
//     Quand la souris se déplace à l'intérieur du rectangle il devient rouge; il reprend sa couleur originale quand la souris n'est plus dedans.
//     Quand on double-clique sur le rectangle il devient vert.


let button = document.querySelector('#toggle-rectangle');

button.addEventListener('click', cacheOuAfficheRectangle);

/*function cacheOuAfficheRectangle() {
    // Ici, selectionner la div aVEC LA CLASSE RECTANGLE
    const rectangle = document.querySelector('.rectangle')
    // Si il y a pas la class afficher 
    /* Si la liste des classes de la div ne contient pas la class afficher'*/
    if(rectangle.classList.contains('rectangle') ) {
       console.log('ajouter');
        // je l'ajoute
         rectangle.classList.add('afficher');
        // sinon
    } else {
    
        // j'enleve
        console.log('enlever');
        rectangle.classList.remove('afficher');
        
    }
         
}


//     Quand la souris se déplace à l'intérieur du rectangle il devient rouge; il reprend sa couleur originale quand la souris n'est plus dedans.


//deplacesousirsalinterieur()
//rectangle.addEventListener('onmousemove', function (event) {
  // rectangle.style.backgroundColor = "red";
//}

//sourisdehors()
//rectangle.addEventListener("mouseout", mouseout());

//     Quand on double-clique sur le rectangle il devient vert.
//rectangle.addEventListener('dblclick', function (event) {
  // rectangle.style.backgroundColor = "green";
//}
/*rectangle.addEventListener('mouseover', changeCouleur);
rectangle.addEventListener('mouseout', changeCouleur);

re
function changeCouleur() {
    this.classList.toggle('important');
}

function changeCouleur() {
    this.classList.toggle('important');
}

/* //   if(rectangle.classList.contains('hidden')) {
    //       //faire qqchose
    //       rectangle.classList.remove('hidden');
    //   } else {
    //       rectangle.classList.add('hidden');
    //   }
    
    //   rectangle.classList.toggle('hidden');
    
    if (getComputedStyle(rectangle).display != "none") {
        rectangle.style.display = "none";
    } else {
        rectangle.style.display = "block";
    }
       
       
   });
});


rectangle.addEventListener('mouseover', changeCouleur);
rectangle.addEventListener('mouseout', changeCouleur);

rectangle.addEventListener('dblclick', dealWithGreen);

function dealWithGreen() {
    this.classList.toggle('green');
}


function changeCouleur() {
    this.classList.toggle('important');
}
*/