<?php

    class Adduser
    {
        public function add(  $firstname,
                                 $lastname,
                                 $birthday,
                                 $adress, 
                                 $city, 
                                 $zipcode,
                                 $phone,
                                 $email,
                                 $password)
        {
            $pdo = new PDO(
                'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_resto', 
                'maxxk67', //user 
                '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
    
    
            // récuperation des données utilisateurs
            
        
        
            
        
            $query = $pdo->prepare('INSERT INTO users (firstname,
                                    lastname,
                                    date_of_birthdaay,
                                    adress, city, zipcode, phone, email, password )
                                    VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $query->execute( [ $firstname, $lastname, $birthday, $adress, $city, $zipcode, $phone, $email, $password] );
            $pdo = null;
        
        }
    }