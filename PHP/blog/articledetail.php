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
    $articles = $request ->fetch(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
    
    

    $request2 = $pdo->prepare ('SELECT content,
                                nickname,
                                article_id FROM comments 
                                WHERE article_id = ? ');
    $request2->execute([$id]);
    $comments = $request2 ->fetchALL(PDO::FETCH_ASSOC); 
    //var_dump($comments);

    $pdo = null;