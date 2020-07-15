<?php

require('nettoyage.php');
require('read.php');

$post = cleanPost ($_POST);


if (isset($post['tache']) && $post['tache'] === 'on'); //si la case est coché je modifie la ligne.
{
  array_splice($data, $post['taskId'], 1);
  
  $handle = fopen('todolist.csv', 'w'); 
}

  fclose($handle);


header('Location: index.php');


die();