<?php

    require('connect.php');

// je récupere les données du formulaire utilisateur
    var_dump($_POST);
    
$nom = $_POST ['firstname'];
$prenom = $_POST ['lastname'];
$article = $_POST ['article'];


