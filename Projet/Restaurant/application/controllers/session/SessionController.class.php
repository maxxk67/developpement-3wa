<?php

class SessionController
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
    	
    	$login =  $_POST ['login'];
        $password =  $_POST ['password'];
        
        $connect = new Adduser();
    	$user = $connect->connect(  $login, 
    	                           $password);
    	
    	if (empty($user)==true){
    	    return ['error'=> 'Login ou mot de passe incorrect'];
    	}
    	
        else {
          $_SESSION['connected_user'] = $user;
          $http->redirectTo("/");
        }
    	
    	
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}