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