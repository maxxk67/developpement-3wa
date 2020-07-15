<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Liste des commandes</title>
</head>

<?php

require ('connect.php') ?>

    <body>
    
        <header>
            <h1>Liste des commandes</h1>
        </header>
        
        <ol> 
            <li>Numéro de la commande <?php $order ['orderNumber']; ?></li> 
            <li>Date de la commande</li>
        </ol>
    
</body>
</html>