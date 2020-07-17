<?php
    require ('connect.php') 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>Liste des commandes</title>
</head>



    <body>
    
        <header>
            <h1>Liste des commandes</h1>
        </header>
        <!-- j'affiche toutes les commandes dans une liste -->
        <table>
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