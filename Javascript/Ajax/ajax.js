
const form = document.querySelector('form');

form.addEventListener('submit', vaChercher);


function vaChercher(e) {
    e.preventDefault();
    const name = this.querySelector('input[name=name]').value;
    const email = this.querySelector('input[name=email]').value;


    const contact = {
        name: name,
        email: email
    };



    let url = new URL('https://maxxk67.sites.3wa.io/Javascript/Ajax/essai.php');

//dans les parenthèses mettre clé et valeurs voulu.

    url.searchParams.set('orderNumber', 10100);

console.log(url);
    // Les callback flèches sur plusieurs lignes === return !! pas !! automatique.
    fetch(url)
        .then((response) => {
            return response.text();
        })
        .then((data) => {
            console.log(data);
        })
        .catch((error) => {
            console.error(error);
        });

    // Les callback flèches sur une ligne === return automatique
    fetch(url)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            return console.log(data);
        })
        .catch((error) => {
            return console.error(error);
        });
}
