//* Quand on clique sur un élément de la liste *photo-list*, l'élément en question se voit affecter la class *selected* et le message avec le nombre de photos sélectionnées se met à jour. Un deuxième clic inverse l'opération.

//clique sur un element , celui ajoute class selected

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
let photos = document.querySelectorAll('#photo-list img');
photos = Array.from(photos);
let span = document.querySelector('#number-selected');

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/
//cliquesurelement()


/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/
console.log(photos);
photos.forEach(image => {
   image.addEventListener('click', function() {
      
      console.log(this);

      this.classList.toggle('selected'); //Ici on gère les class
      
      
      span.innerText = document.querySelectorAll('.selected').length;
      console.log(span.innerText);
      
   });
});

//on met a jour le nombre de photo selectionner lorsque les photos sont selectionnez

//si on clique sur une photo c'est plus 1

