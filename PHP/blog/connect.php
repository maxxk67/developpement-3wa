<?php

$pdo = new PDO(
    'mysql:host=home.3wa.io:3307;dbname=live-33_maxxk67_blog', // host et base de données
    'maxxk67', //user 
    '1ddc8ff8YzFjZjAxNDMwMzZmZGY4NjVhMzY4MjM06ff4ebde',// ici le mot de passe
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);