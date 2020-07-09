<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Lotterie</title>
    </head>
    <body>
        
        <!--<?php
        
            // echo '<ul>';
        
            // foreach($array as $num) {
            //     echo '<li>' . $num . '</li>';
            // }
        
            // echo '</ul>';
        
        ?>-->
        
        <ul>
            <?php foreach($array as $num) : ?>
                <li><?= $num ?></li>
            <?php endforeach ?>    
        </ul>
        
        
    </body>
    </html>