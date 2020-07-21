$form = $('#form');

$form.hide('slow');

$form.show('slow');

$form.on('submit', persistContact); //equivalent ad event listener

function persistContact (e) {
    e.preventDefault();
    
    
    
    // je récupère les données du formulaire.
    $contact = $(this).serializeArray();
    
    $contact = JSON.parse(localStorage.getItem($key)) || [];
    
    localStorage.setItem($key,JSON.stringify($contact));
    
    console.log($contact);
    
    
    // decider ce que tu dois mettre dans localstorage recuper value
    
    $key = 'contacts';
    addToLocalStorage($key, $contact);
    
}


 /* $object = $(this).serialize(); // ici c'est utile pour un GET
     console.log($object);*/
 




















//il faut que j'ajoute les données récuperer dans le local storage.
function addToLocalStorage(key, value){
    localStorage.setItem(key, JSON.stringify(value));
}
