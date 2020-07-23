<?php
$age_du_visiteur = 17;

$dateNaissance = date ('d,m,y h:i:s');




$user = [
    'age' => $age_du_visiteur,
    'naissance' => $dateNaissance,
    'parametre' => $_GET['orderNumber']
];


header("Content-Type: Application/json");
echo json_encode($user);