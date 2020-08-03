<?php

    require('connect.php');
    
    $pdo->exec('set names utf8');

$request = $pdo->prepare ("SELECT * FROM articles as a
INNER JOIN category as c ON c.id = a.category_id
INNER JOIN author as at ON at.id = a.author_id"); // (requête SQL)
$request->execute();
$articles = $request ->fetchALL(PDO::FETCH_ASSOC); 
 $pdo = null;

include ('home.php');