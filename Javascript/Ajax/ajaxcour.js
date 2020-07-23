// AJAX
// Asynchronous JavaScript And XML
const form = document.querySelector('form');

form.addEventListener('submit', vaChercher);

function vaChercher(e) {
    e.preventDefault();
    const name = this.querySelector('input[name=name]').value;
    const firstname = this.querySelector('input[name=firstname]').value;


    const contact = {
        name,
        firstname
    };


    let url = new URL('https://live-33.sites.3wa.io/ajax/index.php');

    url.searchParams.set('id', 10100);
    url.searchParams.set('user_id', 4134134);
    
    
    // Les callback flèches sur plusieurs lignes === return !! pas !! automatique.
    fetch(url)
        .then(response => {
            return response.text();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error(error);
        });

    // Les callback flèches sur une ligne === return automatique
    fetch(url)
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error(error));
}
