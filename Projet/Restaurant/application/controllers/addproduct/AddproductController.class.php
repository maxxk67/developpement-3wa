<?php

class AddproductController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $photo = $_FILES['photo']['name'];
        $url = WWW_PATH.'/images/meals/'.$photo;
        
        move_uploaded_file($_FILES['photo']['tmp_name'], $url);
        
        $request = new Request();
        $request->addProduct($name, $description,$price, $photo);
        
        return ['message' => 'produit ajouté'];
        
    	 
    }
}