let contact = {
    nom: 'laurent',
    phone: '05-054-05'
}

// JSON.stringify() transform l'objet en string
localStorage.setItem('contact', JSON.stringify(contact));

let contact2= {
    nom: 'qqundautre',
    phone: '05-054-05'
}
// Pour ajouter des donnees utiles au localstorage, on les stock dans un tableau
let array = [];

// On ajoute nos informations au tableau
array.push(contact);
array.push(contact2);

// On convertirt le tableau en string, et on l'ajoute au localstorage
localStorage.setItem('contact', JSON.stringify(array));
// JSON: Javascript Object Notation
let contact3 = {
    nom: 'contact3',
    phone: '05-054-05'
}

array.push(contact3); // je rajoute un troisieme contact a ma liste.

localStorage.setItem('contact', JSON.stringify(array));
// On degomme tout ce qui il a deja a la cle contact,
//et on remet le tableau

let contacts = localStorage.getItem('contact');

contacts = JSON.parse(contacts);

const div = document.createElement('div');

contacts.forEach((contact, index) => {
    const ul = document.createElement('ul');

    ul.setAttribute('data-index', index);
    ul.setAttribute('data-test', 'test');

    ul.innerHTML = `<li>${contact.nom}</li><li>${contact.phone}</li>`;

    div.appendChild(ul);

});

document.querySelector('.container').appendChild(div);








if(localStorage.getItem('contact') !== null) {
    contacts = JSON.parse(localStorage.getItem('contact'));
} else {
    contacts = [];
}







localStorage.removeItem('contact');

contacts = JSON.parse(localStorage.getItem('contact')) || [];

console.log(contacts);




// j'ai les donnees:
let data = [
    {
        nom: 'laurent',
        phone: '05-054-05'
    },
    {
        nom: 'contact2',
        phone: '05-054-05'
    },
    {
        nom: 'contact3',
        phone: '05-054-05'
    },
];

// on sait que le contact a une cle
// donc il est dans un tableau
// est-ce qu'on connait un methode pour enlever un element precis d'un tableau
// splice() ?
// enleve un contact de localstorage
// data.splice(index, 1); On efface un contact de notre tableau
// data.splice(index, 1, contact) // mettre a jour

// Enlever un contact
contacts = document.querySelectorAll('ul');


contacts.forEach(contact => {
    if(contact.dataset.index === index) {

    }

});





//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach

// Les gens a suivre sur twitter

// PHP:
// Taylor Otwell: createur de laravel => @taylorotwell
// Fabien Potencier: createur symfony => @fabpot
// Freek Murze: patron d'agence web belge (spatie), createur de librairie utilisees dans le monde entier. => @freekmurze
// Mohamed Said: Bosse a plein temps sur le framework laravel. => @themsaid (parle arabe :-) )


// Javascript:
// Sarah Drasner: pour tout JavaScript => @sarah_edo
