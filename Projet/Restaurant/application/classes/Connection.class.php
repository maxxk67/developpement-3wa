<?php

    class Connection
    {
        public function connect(  $login,
                                  $password)
                                  
                                  
                                  
                                  
    {
            $pdo = new PDO(
                'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_resto', 
                'maxxk67', 
                '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
            
        // récuperation des données utilisateurs
            
             $query = $pdo->prepare(" SELECT *
                                     FROM users WHERE email = ? AND password = ? " ); 
                                     // vérification correspondance mail et passe utilisateur
                                    
            $query->execute( [ $login, $password] );
            $user = $query ->fetch(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
            return $user;
            $pdo = null;
        
        }
        
    private function hashPassword($password)
    {
         // sel aleatoire : string aleatoire
            $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
            
            // hash avec bcrypt
            // bcrypt stocke le sel dans le hash donc pas besoin de champ supplementaires
            $hash = crypt( $password , $salt );
            
            return $hash; 
    }
    }
    