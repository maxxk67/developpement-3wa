<?php

// 2. Affichage de la liste des tâches

//Les tâches seront affichées sous forme de liste de la manière suivante :

    //  Le titre de la tâche est affiché
    //La description apparaît seulement au survol du titre par la souris
    //La couleur du titre renseigne sur la priorité de la tâche : - Priorité basse : en vert - Priorité normale : en noir - Priorité haute : en rouge
    //Si la date butoir de la tâche est dépassée, les mots "EN RETARD" s'afficheront après le titre de la tâche



require ('nettoyage.php');

$post = cleanPost($_POST);

$handle = fopen('todolist.csv', 'a+'); //j'ouvre ou crée le fichier si il n'existe pas.
fputcsv($handle, $post); // j'écrit les données du formulaire dans le fichier
fclose($handle); // je ferme le fichier.


//redirection
header('location: index.php');