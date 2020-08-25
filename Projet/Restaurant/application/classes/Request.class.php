<?php

    class Request
    {
     public function addProduct( $name, $description, $prix, $photo)
        {
            $pdo = new PDO
        	(
        	 'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_resto', // host et base de données
             'maxxk67', //user 
            '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',
        	    [
        	    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // fetchall en tableau associatif automatiquement
        	    ]
            );
            
            $sql = "INSERT INTO products(title, description, price, picture) 
            VALUES(?,?,?,?)";
            
            $query = $pdo->prepare($sql);
            
            $query->execute([$name, $description, $prix, $photo]);
        }
    
    
    
    public function request()
    {
        $pdo = new PDO(
        'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_resto', // host et base de données
        'maxxk67', //user 
        '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',// ici le mot de passe
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
    $pdo->exec('set names utf8');
    $request = $pdo->prepare ("SELECT title,
                                    description,
                                    price,
                                    id,
                                    picture FROM products"); // (requête SQL)selectionne une table dans la base de donnees
    $request->execute();
    $products = $request ->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
    return $products;
    $pdo = null;
    }
    }