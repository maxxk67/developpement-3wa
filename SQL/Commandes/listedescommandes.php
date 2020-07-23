<?php
    require ('connect.php');
    $pdo = null;
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


    <title>Liste des commandes</title>
</head>



    <body>
    
        <header>
            <h1>Liste des commandes</h1>
        </header>
        <!-- j'affiche toutes les commandes dans une liste -->
            <button type="button">Infos Ajax</button>
            <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Numéro de la commande</th>
                <th> Date de la commande</th>
                <th>Date de la livraison </th>
                <th>Statut de la commande</th>
            </tr>
            <tbody>
                <?php foreach ($orders as $order) : ?> 
                <tr> 
                    <td>
                        <a href="detailcommande.php?orderNumber=<?php echo $order['orderNumber']; ?>">
                            <?php echo $order['orderNumber']; ?>
                        </a>
                    </td> 
                    <td><?php echo $order['orderDate']; ?></td>
                    <td><?php echo $order['requiredDate']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                </tr>
                <?php endforeach ?>        
            </tbody>
           
        </table>
        

</body>

</html>