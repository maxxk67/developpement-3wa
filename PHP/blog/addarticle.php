<?php

    require('connect.php');
    
    $title = $_POST ['title'];
    $author = $_POST ['author'];
    $category = $_POST ['category'];
    $article = $_POST ['article'];

var_dump($_POST);


    $query = $pdo->prepare('INSERT INTO articles (title, content, publication_date , category_id, image, author_id ) VALUES ( ?, ?, NOW(), ?, NULL, ?)');
    $query->execute( [ $title, $article , $category, $author] );
    $pdo = null;
       // redirection

    header('Location: display.php');