<?php

$pdo = new PDO(
    'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_models', // host et base de données
    'maxxk67', //user 
    '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',// ici le mot de passe
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$pdo->exec('set names utf8');

$statement = $pdo->prepare ("SELECT * FROM orders"); // (requête SQL)selectionne une table dans la base de donnees
$statement->execute();
$orders = $statement ->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
$pdo = null;

foreach ($orders as $order) {

    
}


?>