console.log('ok');

const form = document.querySelector('form');

form.addEventListener('submit', vaChercher);


function vaChercher(e) {
    e.preventDefault();
    let url = 'https://maxxk67.sites.3wa.io/Javascript/Ajax/customer-search/index.php';
   //let url = new URL('https://maxxk67.sites.3wa.io/Javascript/Ajax/customer-search/index.php');
    
    const client = this.querySelector('input[name=customers]').value;

        let formdata = new FormData();
        
        formdata.append('customers' , client);
        
        let request = new Request(url, {
            method: 'POST',
            body: formdata,
            mode: 'cors'
        });




    // Les callback flèches sur plusieurs lignes === return !! pas !! automatique.
    fetch(request)
        .then(response => {
            return response.json();
        })
        .then(data => {
            document.querySelector('#reponse').innerHTML = '';
            afficheClient();
            console.log(data);
        })
        .catch(error => {
            console.error(error);
        });
}

const divreponse = document.querySelector('.text-success');
//je dois afficher chaque client dans une UL
function afficheClient () {
   data.forEach(customers => {
    createUl(customers);
});
function createUl(customer) {
    const resp = document.querySelector('#response');

    resp.innerHTML += `
    <p>
        <a
            class="recuperer"
            href="https://live-33.sites.3wa.io/customer-search/index.php?cust=${customer.customerNumber}">${customer.customerName}
        </a>
    </p>`;

    const links = document.querySelectorAll('.recuperer');

    links.forEach(link => {
        link.addEventListener('click', getOneCustomer);
    });
}



function getOneCustomer(event) {
    event.preventDefault();

    const url = this.href;

    fetch(url)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            // selectionner la ul
            // on fait qqchose avec data
            const ul = document.querySelector('#customer');

            ul.innerHTML = `
                <li>${data.customerName}</li>
                <li>${data.addressLine1}</li>
                <li>${data.phone}</li>
                <li>${data.postalCode}</li>
                <li>${data.state}</li>
                <li>${data.city}</li>
                <li><button id="edit">Editer</button></li>
            `;

        })
        .catch(err => console.error(err));


