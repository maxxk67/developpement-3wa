'use strict'

document.addEventListener('DOMContentLoaded', function() {
    class Cart
    {
        constructor()
        {
          
            $('#add').click(this.addProduct.bind(this));
            $(document).on('click','.del',this.deleteProduct.bind(this));
  
        }
    
    
        addProduct()
        {   
            
            let product = $('#name').text();
            let price =   $('#price').text();
            let quantity = $('#quantity').val();
            let id = $('.order').val();
            
            
            this.displayProduct(product, price, quantity,id)
           
           
        }
        
        deleteProduct(  )
        {
           console.log('delete'); 
           let id = $(event.target).data('id');
           $(`tr[data-id=${id}]`).remove();
           
           console.log(id);
        }
        displayProduct( product,price,quantity,id )
        {
            console.log(id);           
            let html = `<tr data-id='${id}'> 
            <td>${quantity} </td> 
            <td>${product}</td> 
            <td>${price}</td>
            <td>${quantity * price}</td>
            <td> <button class = "del" data-id='${id}'>supprimer </button> </td>
            </tr>`
            $('section tbody').append(html);
            this.addLocalStorage(product, price, quantity,id)
             
         }
            displayProducts()
         {
          
        }
        
         addLocalStorage(product,price,quantity,id)
        {
            let products = {
                            title: product,
                             prix: price,
                            quantité:quantity,
                            total : quantity*price}
                            ;
            console.log(products);
            localStorage.setItem("product",JSON.stringify(products));
            
    }    
        
        
    }
    
        
        
let basket = new Cart();

    
});