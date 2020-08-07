<?php
	
	require('connect.php');
    $id = $_GET['id'];



    
    $pdo->exec('set names utf8');

    $request = $pdo->prepare ('SELECT articles.title, 
                            articles.content,
                            articles.publication_date, 
                            articles.author_id,
                            c.name,
                            at.firstname,
                            at.lastname,
                            category_id FROM articles
                            INNER JOIN category as c ON c.id = articles.category_id
                            INNER JOIN author as at ON at.id = articles.author_id
                            WHERE articles.id = ? '); 

   
     $request->execute( [$id] );
    $articles = $request ->fetch(PDO::FETCH_ASSOC); 
    //fetch_assoc transforme en tableau assiocatif
   


$request2 = $pdo->prepare ("SELECT * FROM category"); // (requête SQL)selectionne une table dans la base de donnees
$request2->execute();
$category = $request2->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif

    
    
$request3 = $pdo->prepare ("SELECT * FROM author"); // (requête SQL)selectionne une table dans la base de donnees
$request3->execute();
$author = $request3 ->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
//var_dump($author)













include('updatearticle.php');