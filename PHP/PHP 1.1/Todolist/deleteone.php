<?php

require('nettoyage.php');
require('read.php');

$post = cleanPost ($_POST);



if (isset($post['tache']) && $post['tache'] === 'on') //si la case est coché je supprime la ligne.
{
  array_splice($data, $post['taskId'], 1);
  
  $handle = fopen('todolist.csv', 'w'); //j'ouvre ou et autorise en écriture le fichier 
  
  foreach($data as $task) {
      fputcsv($handle, $task); // j'écrit   
  }
  
  fclose($handle);


}

header('Location: index.php');


die();

