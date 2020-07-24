<?php

    // Recuperation du prix envoyé par JS
                                
    // let data = { price : maxPrice } -> $_GET['price']
                                                                
    $price = $_GET['price'];

    // connexion

$pdo = new PDO(
    'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_models', // host et base de données
    'maxxk67', //user 
    '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',// ici le mot de passe
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

    // Injection SQL
    // requete parametrée
    $sql = "SELECT * FROM products WHERE MSRP <= ?";
    //$sql = 'SELECT * FROM products WHERE MSRP <= '.$price;

    ///$query = $pdo->query($sql);
    $query = $pdo->prepare($sql);
    $query->execute( [ $price ] );
    
    /*
    $sql = "SELECT * FROM products WHERE MSRP <= ? AND MSRP >= ?";
    $query = $pdo->prepare($sql);
    $query->execute( [ $max, $min ] );
    */

    $products = $query->fetchAll(PDO::FETCH_ASSOC);

    // serialization en JSON
    $json = json_encode($products);

    // affichage pour la transmission en AJAX
    echo $json;
?>