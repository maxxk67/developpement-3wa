const button= document.querySelector('#produits');

button.addEventListener('click', vaChercher);
    //$("#load").click(onClickLoadProducts); equivalement jquery.
    
    //$("recherche").click(recherchePrix); equivalement jquery.
    

const button2= document.querySelector('#search');

 button2.addEventListener('click', recherchePrix);


function vaChercher(e) {
    console.log('ok');
    e.preventDefault();
    $.get('index.php', load);
}
function load (data) {
    console.log(data);
let produits = data
    
    $("#list").append("<tr><th>Nom </th> <th> Description </th> <th> Prix </th></tr>");
    
    for (let i = 0; i < data.length ; i++) {
    $("#list").append(`<tr>`);    
    $("#list").append(`<td> ${produits[i].productName}</td>`); 
    $("#list").append(`<td> ${produits[i].productDescription}</td>`);
    $("#list").append(`<td> ${produits[i].MSRP}</td>`); 
    $("#list").append(`</tr>`);
        
    }

   /* // boucle
    
    for( let i = 0 ; i < 5 ; i++ )
    {
       
        console.log(data[i].productName);
    }*/

    
}

function recherchePrix() {
    console.log('ok');
    let maxPrice = $("#prix").val();
    let dataprice = {price:maxPrice};
    
    $.get('rechercheprix.php', dataprice, ajaxLoaded);
    
    console.log(dataprice);  
}

  function ajaxLoaded(json) {
            console.log(json);

        }

        
 

        
      