<?php

require('infoclient.php');



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Informations commande</title>
</head>

<body>
    
              <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Nom client</th>
                <th> Nom du contact</th>
                <th>Prénom du contact</th>
                <th>adresse</th>
                <th>ville</th>
            </tr>
            <tbody>
                
                <tr> 
                   <td><?php echo $infoclient['customerName']; ?></td>
                    <td><?php echo $infoclient['contactFirstName']; ?></td>
                    <td><?php echo $infoclient['contactLastName']; ?></td>
                    <td><?php echo $infoclient['addressLine1']; ?></td>
                    <td><?php echo $infoclient['city']; ?></td>
                </tr>
               
            </tbody>
           
        </table>
         
         
         
            <table class="table">
            <thead class="thead-dark">
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