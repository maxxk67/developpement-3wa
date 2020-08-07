<?php

require('connect.php');

$id = $_GET['id'];



    $pdo->exec('set names utf8');

    $request = $pdo->prepare ("DELETE FROM comments 
                                WHERE article_id = ? ;
                                DELETE FROM articles
                                WHERE id = ?"); // (requête SQL)
    $request->execute([$id, $id]);
    
     $pdo = null;
     
echo "Supprimer avec Succés" ;


header('Refresh: 1; url=index.php');
