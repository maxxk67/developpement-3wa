<?php

class ConfirmController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        // proteger l'acces a la page 
        // empeche les paniers vides
        if ( isset($_SESSION['cart']) == false || empty($_SESSION['cart'] ))
        {
            $http->redirectTo('/');    
        }
        
        $cart = $_SESSION['cart'];
        $connected_user = $_SESSION['connected_user'];
        
           $validate = new Validate();
        $total = $validate->calculateTotal($cart);
        
        $taxes = $total * 0.20;
        $totalWithTaxes = $total + $taxes;
        
        return [ 
            'cart' => $cart,
            'total' =>$total,
            'taxes' => $taxes,
            'totalWithTaxes' => $totalWithTaxes,
            'connected_user'=> $connected_user 
        ];
    }
        
       
    

    public function httpPostMethod(Http $http, array $formFields)
    {
    
    	 
    	 
    }
}