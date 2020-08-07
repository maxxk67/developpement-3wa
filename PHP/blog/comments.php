<?php
    require('connect.php');
   

    
    $nickName = $_POST ['nickName'];
    $comment = $_POST ['contents'];
    $id = $_POST ['Id'];
     


    $query = $pdo->prepare('INSERT INTO comments (id, content, nickname, article_id) VALUES (NULL, ?, ?, ? )');
    $query->execute( [ $comment , $nickName, $id ] );
    $pdo = null;
       
    
      
    
       
       // redirection
    
   header('Location:detail.php?id='. $id);
   
   
   /* Deuxième méthode anti injetion SQL.

$sql = "INSERT INTO comments(nickname, content, article_id, upvote, downvote)
VALUES ( :nickname , :content , :article_id , 0, 0 )";

$query =  $pdo->prepare($sql);

$data = [
    'nickname' => $nickname,
    'content' => $content,
    'article_id' => $article_id
];

$query->execute( $data );