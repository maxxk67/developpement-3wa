import {                         //importe les fonctions d'un fichier module JS.
    addToLocalStorage,
    removeLocalStorage,
    getItemFromLocalStorage,
    storagekey,
} from './localStorage.js';

import {affichage, createUL, divPourContacts, deleteContact,} from './affichageHtml.js';


//je selectionne le formulaire


document.addEventListener('DOMContentLoaded', () => {
    affichage();
    createContact();
    deleteContact();
    document.querySelector('#register').addEventListener('click', cacheOuAfficheFormulaire);
});

//let button = document.querySelector('#register');

document.querySelector('#remove').addEventListener('click', effacerLesContacts);



function effacerLesContacts() {
    removeLocalStorage(storagekey);
    
    divPourContacts.innerHTML = '';
}
  

 function createContact() {
     const form = document.querySelector('form');
     //j'écoute le bouton submit 
     form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // si une case de forumulaire ou l'autre est vide
        if (this.querySelector('input[name=name').value === '' || this.querySelector('input[name=email]').value === '') {
             // on retourne .
            return;
        }
        
        const name = this.querySelector('input[name=name]').value;
        const email = this.querySelector('input[name=email]').value;
        
        const contact = {
            name : name,
            email : email
        };
        
        if(contact){  //si j'ai un contact je l'enregistre
            persistContact(contact);
        }
        
        // on met les objets dans un tableau 
        function persistContact(contact){
        const contacts =  getItemFromLocalStorage(storagekey);
        contacts.push(contact);
        const index = contacts.length - 1;
        //On envoie le tableau dans local storage
        
        addToLocalStorage(storagekey, contacts);
        
        const ul = createUL(contact, index);
        
        divPourContacts.appendChild(ul); 
            
        }
    });
}


 //quand je clique sur le bouton j'arriche le formulaire.

function cacheOuAfficheFormulaire () {
    // le this c'est l'element que t'as clique
    //this.classList.toggle('form');
    const form = document.querySelector('form');
    form.classList.toggle('cacher');
}



