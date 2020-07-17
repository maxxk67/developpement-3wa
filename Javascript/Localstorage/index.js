
//je selectionne le formulaire
const form = document.querySelector('form');
let storagekey = 'contacts';
//j'écoute le bouton submit 
form.addEventListener('submit', function(event) {
   event.preventDefault();
   
   const name = this.querySelector('input[name=name]').value;
   const email = this.querySelector('input[email=email]').value;

    const contact = {
        name : name,
        email : email
    };

// on met les objets dans un tableau 
    const contacts =  getItemFromLocalStorage(storagekey);
    contacts.push(contact);

//On envoie le tableau dans local storage

    addToLocalStorage(storagekey, contacts);
});

// recuperation d'un element

  

    //JSON.stringify(contact); //converti objet en string
    //JSON.parse('string'); //Converti string en objet.
    
    // Creer un formulaire avec au moins deux input

function addToLocalStorage(key, value) {

    localStorage.setItem(key, JSON.stringify(value));

}

function getItemFromLocalStorage(key) {
    return JSON.parse(localStorage.getItem(key)) || [];
}

//recuperation de tous les contacts du tableau 
const contacts =  getItemFromLocalStorage(storagekey);
//affichage sur la page 

const div = document.createElement('div'); //cree une div dans la page html

contacts.forEach((contact, index) => {     //boucle qui parcour le tableau.
    const ul = document.createElement('ul');

    ul.setAttribute('data-index', index); // attribution du data-index.
    ul.setAttribute('data-test', 'test');

    ul.innerHTML = `<li>${contact.name}</li><li>${contact.email}</li>`; //affichage du nom et de l'email du stockage local.

    div.appendChild(ul);

});

const divPourContacts = document.querySelector('.container'); //cree une div avec class container pour contact.
divPourContacts.appendChild(div);