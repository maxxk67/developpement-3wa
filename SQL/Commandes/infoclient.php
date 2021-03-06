<?php
require ('nettoyage.php');
require'connect.php';
$order = cleanGET($_GET);




    //préparation de la requète pour récuperer les informations de la commande.
    
    
$statement = $pdo->prepare ("SELECT 
                                o.orderNumber, 
                                p.productName,
                                od.priceEach,
                                od.quantityOrdered,
                                ROUND(od.quantityOrdered * od.priceEach, 2) as totalPayment
                                    
                                FROM orders AS o
                                JOIN orderdetails AS od ON o.orderNumber = od.orderNumber
                                JOIN products AS p ON p.productCode = od.productCode
                                WHERE o.orderNumber = {$order['orderNumber']}"
                            ); 
    
    // (requête SQL)selectionne une table dans la base de donnees puis 
    //join d'autres tables afin d'avoir toute les informations de la commande du client
    //pour pouvoir les afficher.
       
        
$statement->execute();
$client = $statement ->fetchALL(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif

       

$request=  $pdo->prepare ("SELECT 
                               c.customerName,
                                c.addressLine1,
                                c.city,
                                c.contactFirstName,
                                c.contactLastName,
                                c.country
                            FROM customers AS c
                            JOIN orders AS o ON c.customerNumber = o.customerNumber
                           
                            WHERE o.orderNumber = {$order['orderNumber']}"
                            ); 
    
    // (requête SQL)selectionne une table dans la base de donnees puis 
    //join d'autres tables afin d'avoir toute les informations de la commande du client
    //pour pouvoir les afficher.
       
        
$request->execute();
$infoclient = $request ->fetch(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
$pdo = null;
     

/* 


Lorsque que je clique sur le numéro de commande de la page liste de commande, j'affiche
le détail de ce numéro de commande sur la page détail.
étapes : 
j'affiche les Informations concernant le client qui a passé la commande 
(nom du client, nom et prénom du contact, adresse, ville) 
Je récupère le get avec le numéro de commande.
Grâce a l'information j'extrai les informations clients.
J'affiche le Récapitulatif des produits commandés
(nom du produit, quantité commandé, prix unitaire, sous-total)
En fin de page j'affiche  
le Total de la commande HT, montant de la TVA, total de la commande TTC
*/