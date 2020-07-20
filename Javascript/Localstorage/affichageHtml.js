import {getItemFromLocalStorage, storagekey} from './localStorage.js';


const divPourContacts = document.querySelector('.container');

function createUL(contact, index) {
    const ul = document.createElement('ul');

    ul.setAttribute('data-index', index); // attribution du data-index.
    
       //console.log(Object.keys(contact));
    //console.log(Object.values(contact));
    //console.log(Object.freeze(contact));
    for (let value of Object.values(contact)) {
        if (value) {
            const li = document.createElement('li');
            li.innerHTML = value;
            ul.appendChild(li);
        }
    }
const button = document.createElement('button');
button.innerText ='effacer';
button.classList.add('btn', 'btn-xs', 'btn-danger');
button.setAttribute('data-delete', index);
ul.appendChild(button);

const button2 = document.createElement('button');
button2.innerText ='update';
button2.classList.add('btn', 'btn-xs', 'btn-info');
button2.setAttribute('data-update', index);
ul.appendChild(button2);
    
    
    
    //ul.innerHTML = `<li>${contact.name}</li><li>${contact.email}</li>`;
    
    return ul;

}

function deleteContact () {
    const btns = document.querySelectorAll('.btn-danger');
    const btns2 = document.querySelectorAll('.btn-info');
    btns.forEach((btn) => {
        btn.addEventListener('click', function() {
            const index = this.getAttribute('data-delete');
            supprimerEntree(index);
        });
    });
       /* btns2.addEventListener('click', function() {
            const index = this.getAttribute('data-update');
            update(index);
    });*/
}

function supprimerEntree(index) {
    const contacts = getItemFromLocalStorage(storageKey);

    contacts.splice(index, 1);

    addToLocalstorage(storageKey, contacts);
}

//affichage sur la page 
function affichage() {
    const contacts = getItemFromLocalStorage(storagekey);
    
    contacts.forEach((contact, index) => {     //boucle qui parcour le tableau.
        const ul = createUL(contact, index);
        
        divPourContacts.appendChild(ul);
    });
}


export {affichage, createUL, divPourContacts, deleteContact};