<?php

class validate
{
    public function insertOrder( $cart, $userId )
    {
        // insertion de l'order ( commande generale )
        
        $total = $this->calculateTotal($cart);
        $taxes = $total * 0.20;
        
        $pdo = new PDO
        	(
        	'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_resto', 
            'maxxk67', 
            '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',
        	    [
        	    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // fetchall en tableau associatif automatiquement
        	    ]
        );
        
        $sql = 'INSERT INTO orders(user_id, total, taxes,order_date) VALUES( ?,?,?,NOW()) ';
        
        $query = $pdo->prepare($sql);
        
        $query->execute([$userId, $total, $taxes]);
        
        $orderId = $pdo->lastInsertId();
        
        // insertion order_product ( liste des produits )
        
        $sql = 'INSERT INTO products_orders(order_id, products_id, quantity) VALUES(?,?,?)';
        
        foreach( $cart as $product)
        {
            $productId = $product->id;
            $quantity = $product->quantity;
            
            $query = $pdo->prepare($sql);
        
            $query->execute([$orderId , $productId, $quantity ]);
        }
        
    }
    
    public function calculateTotal( $cart )
    {
        $total = 0;
        
        // calculer le prix total 
        foreach ( $cart as $product)
        {
            $price = $product->price;
            $quantity = $product->quantity;
            $total += $price * $quantity;
        }
        
        return $total;
    }
}