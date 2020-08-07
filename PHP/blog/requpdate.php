<?php
	
	require('connect.php');


    $id = $_POST['Id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $categorylist = $_POST['category'];
    $authorlist = $_POST['author'];
  


    $request = $pdo->prepare ('UPDATE articles
                              SET title = ?,
                              category_id = ?,
                              author_id = ?,
                              content = ?
                              WHERE articles.id = ? '); 

   
     $request->execute( [$title, $categorylist, $authorlist, $content, $id] );
     $pdo = null;

    echo "L'article a bien été mis a jour " ;


    header('Refresh: 1; url=index.php');