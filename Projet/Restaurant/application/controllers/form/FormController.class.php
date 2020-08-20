<?php

class FormController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
            $firstname = $_POST ['firstname'];
            $lastname = $_POST ['lastname'];
            $birthday = $_POST ['year'] . '-'. $_POST['month'] . '-'.  $_POST['day'];
            $adress =  $_POST ['adress'];
            $city    = $_POST ['city'];
            $zipcode =  $_POST ['zipcode'];
            $phone  =  $_POST ['phone'];
            $email =  $_POST ['email'];
            $password =  $_POST ['password'];
            $error = [];
            
            
        	 if ( empty($firstname) == true){
    	 
    	     //afficher un message d'erreur
    	     array_push($error, 'le prenom ne doit pas etre vide');
    	 }
    	     if (empty($lastname) == true) {
    	     array_push ($error, 'le nom ne doit pas etre vide');
    	 }
    	 
            if ( strlen($birthday) != 10 && strlen($birthday) != 9 && strlen($birthday) != 8){
    	 
    	     array_push($errors, 'erreur');
    	 }
    		 if (empty($adress) == true) {
    	   array_push ($error, 'le champ adress ne doit pas etre vide');
    	 }	 if (empty($city) == true) {
    	     array_push ($error,'la ville ne doit pas etre vide');
    	 }	 if (empty($zipcode) == true || strlen($zipcode) != 5  ) {
    	    array_push ($error,'le code postale ne doit pas etre vide ou non valide');
    	 }	 if (empty($phone) == true || strlen($phone) < 8 || strlen($phone) >15) {
    	     array_push ($error,'le telephone ne doit pas etre vide ou non valide');
    	 }	 if (empty($email) == true) {
    	     array_push ($error, 'le mail ne doit pas etre vide');
    	 }
    	 	 if (empty($password) == true || strlen($password) < 10) {
    	     array_push ($error, 'le mot de passe doit pas etre vide ou non valide');
    	 }
    	 
            
    	 
    	 if (count($error) == 0)
    	 {
            	$Add = new Adduser();
                 $user = $Add->add($firstname,
                                 $lastname,
                                 $birthday,
                                 $adress, 
                                 $city, 
                                 $zipcode,
                                 $phone,
                                 $email,
                                 $password);
        
                $http->redirectTo('/');	
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
    
    else {
            return ['error' => $error];
        }
       
    }
    }

    