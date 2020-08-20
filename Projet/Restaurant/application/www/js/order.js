document.addEventListener('DOMContentLoaded', function() {
    
const selectElement = document.querySelector('.order');

selectElement.addEventListener('change', get);

 // declencher une premiere requete AJAX au demarage de la page
    // declencher un faux evenement change
    
    let event = new Event('change');
    selectElement.dispatchEvent(event);

/*function request(e){
    console.log('ok');
    let url = getRequestUrl() + '/ajax';
     e.preventDefault();
    $.get(url, load);
}*/
function get (){
    let url = getRequestUrl() + '/ajax';
    console.log('get');
    let product = $(".order").val();
    console.log(product);
    let order = {order:product};
     $.get(url, order, ajaxLoaded);
}

function ajaxLoaded(json) {
                
            let products=json;
            let produits = JSON.parse([products]);
            console.log(getWwwUrl()+'/images/meals/'+produits.picture);
            $("#name").text(produits.title); 
            $("#description").text(produits.description);
           $("#photo").attr('src', getWwwUrl()+'/images/meals/'+produits.picture);
            $("#price").text(produits.price + '€');
        }
}); 