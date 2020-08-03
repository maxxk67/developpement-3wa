<?php

    require('connect.php');
 

// je récupere les données de la bases sql pour les auteurs et la category.
  
    


$pdo->exec('set names utf8');

$request = $pdo->prepare ("SELECT * FROM author"); // (requête SQL)selectionne une table dans la base de donnees
$request->execute();
$author = $request ->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
//var_dump($author)

$request = $pdo->prepare ("SELECT * FROM category"); // (requête SQL)selectionne une table dans la base de donnees
$request->execute();
$category = $request ->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
//var_dump($category)

$pdo = null;
include('article.php');

