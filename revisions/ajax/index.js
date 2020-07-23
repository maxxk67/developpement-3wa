const button= document.querySelector('button');

button.addEventListener('click', vaChercher);


function vaChercher(e) {
    console.log('ok');
    e.preventDefault();
    $.get('index.php', load);
}
function load (data) {
    console.log(data);
let produits = data
    console.log(data [0].productName);
    console.log(data [1].productName);
    for (let i = 0; i < data.length ; i++) {
    $("#list").append(`<li> ${produits[i].productName}</li>`); 
    }

    // boucle
    
    for( let i = 0 ; i < 5 ; i++ )
    {
       
        console.log(data[i].productName);
    }

}
