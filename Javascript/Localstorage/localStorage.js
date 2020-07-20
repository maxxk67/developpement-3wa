let storagekey = 'contacts';

function addToLocalStorage(key, value) {

    localStorage.setItem(key, JSON.stringify(value));

}

function getItemFromLocalStorage(key) {
    return JSON.parse(localStorage.getItem(key)) || [];
}

function removeLocalStorage (key) {
    localStorage.removeItem('contacts');
}

export { addToLocalStorage, getItemFromLocalStorage, removeLocalStorage, storagekey };
//j'exporte les fonctions du fichier principale.
