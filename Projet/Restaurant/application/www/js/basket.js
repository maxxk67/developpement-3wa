'use strict';

class Cart {
    constructor() {
        this.products = [];

        $('#add').click(this.addProduct.bind(this));
        $('#send').click( this.validate.bind(this) );
        $(document).on('click', '.delete', this.deleteProduct.bind(this));

        // charger les produits du localStorage
        // si le localstorage n'est pas vide

        if (window.localStorage.getItem('cart') != null) {
            let json = window.localStorage.getItem('cart');
            this.products = JSON.parse(json);
        }

        // reafficher le panier au demarrage de la page

        this.displayProducts();
    }

    deleteProduct(event) {
        let id = $(event.target).data('id');
        $(`tr[data-id=${id}]`).remove();

        for (let i = 0; i < this.products.length; i++) {
            if (this.products[i].id == id) {
                // suppression de l'index du tableau
                this.products.splice(i, 1);
                break;
            }
        }

        window.localStorage.setItem('cart', JSON.stringify(this.products));
    }

    addProduct() {
        let price = parseFloat($('#price').text());
        let name = $('#name').text();
        let quantity = parseInt($('#quantity').val());
        let id = $('.order').val();

        let product = {
            price : price,
            name : name,
            quantity : quantity,
            id : id
        };

        let isInCart = false;

        // recherche du produit dans le panier

        for (let i = 0; i < this.products.length; i++) {
            // si il existe : mettre à jour la quantité
            if (this.products[i].id == id) {
                isInCart = true;
                this.products[i].quantity += quantity;
            }
        }

        // si le produit n'existe pas : ajouter

        if (isInCart == false) {
            this.products.push(product);
        }

        this.displayProducts();

        // JSON : javascript object notation

        window.localStorage.setItem('cart', JSON.stringify(this.products));
    }

    displayProduct(price, product, quantity, id) { 
        let html = `<tr data-id='${id}'> 
            <td>${quantity}</td> 
            <td>${product}</td> 
            <td>${price}</td>
            <td>${quantity * price}</td>
            <td> <button class="delete" data-id='${id}'> X </button></td>
        </tr>`;
        $('section tbody').append(html);
    }

    displayProducts() { // vide l'affichage du panier
        $('section tbody').empty();
        //parcour le tableau products.
        for (let i = 0; i < this.products.length; i++) {
            this.displayProduct(
                this.products[i].price,
                this.products[i].name,
                this.products[i].quantity,
                this.products[i].id);
        }
    }
    
    validate() {
        let url = getRequestUrl() + '/sendcart';
        let cart = window.localStorage.getItem('cart');
        let data = {'cart' : cart };
        $.post(url,data,this.confirm)
    }
    
    confirm(data)
    {
        if(data == 'true'){
            window.location.href = getRequestUrl() + '/confirm';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    let cart = new Cart();
});
// attend le chargement complet de la page puis instentie la class cart.