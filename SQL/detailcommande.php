<?php

require('infoclient.php');



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Informations commande</title>
</head>

<body>
    
        <table>
            <tr>
                <th>Nom client</th>
                <th> Nom du contact</th>
                <th>Prénom du contact</th>
                <th>adresse</th>
                <th>ville</th>
            </tr>
            <tbody>
                <?php foreach ($client as $info) : ?> 
                <tr> 
                   <td><?php echo $info['customerName']; ?></td>
                    <td><?php echo $info['contactFirstName']; ?></td>
                    <td><?php echo $info['contactLastName']; ?></td>
                    <td><?php echo $info['addressLine1']; ?></td>
                    <td><?php echo $info['city']; ?></td>
                </tr>
                <?php endforeach ?>        
            </tbody>
           
        </table>
         
         
         
         <table>
            <tr>
                <th>Numéro commande</th>
                <th> Nom du produit</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
            <tbody>
                <?php foreach ($client as $info) : ?> 
                <tr> 
                   <td><?php echo $info['orderNumber']; ?></td>
                    <td><?php echo $info['productName']; ?></td>
                    <td><?php echo $info['quantityOrdered']; ?></td>
                    <td><?php echo $info['totalPayment']; ?></td>
                </tr>
                <?php endforeach ?>        
            </tbody>
           
        </table>
</body>
</html>