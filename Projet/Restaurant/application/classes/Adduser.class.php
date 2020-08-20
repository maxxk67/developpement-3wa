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
                                VALUES ( :firstname, :lastname, :birthday, :adress, :city, :zipcode, :phone, :email, :password )');
                                    
            $value = [
                'firstname' => $firstname, 
                'lastname' => $lastname,
                'birthday' => $birthday,
                'adress' => $adress,
                'city' => $city,
                'zipcode'=> $zipcode,
                'phone' => $phone,
                'email' => $email,
                'password' => $this->hashPassword($password)];
                
            $query->execute( $value );
            $pdo = null;
        
        }
        
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
                                     FROM users WHERE email = ? " ); 
                                     // vérification correspondance mail et passe utilisateur
   
            $query->execute( [ $login] );
            $user = $query ->fetch(PDO::FETCH_ASSOC); //fetch_assoc transforme en tableau assiocatif
            //return $user;
            $pdo = null;
            
           // email ne retourne pas d'utilisateur
            if( empty($user) == true )
            {
                return null;
            }
            
            // recuperation du hash
            
            $hash = $user['password'];
            
            
            // mot de passe correct
            // parce qu'on utilise bcrypt, password verify extrait le sel automatiquement 
            // et rehash le password avec
            if ( password_verify($password, $hash) == true ) 
            {
                return $user;
            }
            else
            {
                return null;
            }
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
    