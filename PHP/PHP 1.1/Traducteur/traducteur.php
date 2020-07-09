<?php


function clean($string) {
    $clean =  htmlentities($string);
    $clean =  htmlspecialchars($string);
    
    return $clean;
}


function cleanPost($post) {
    $rebuildPost = [];
    
    foreach($post as $key => $value ) {
                        
        $cleanValue = clean($value);
        $cleanKey = clean($key);
      
        $rebuildPost[$cleanKey] = $cleanValue;
    }
    
    return $rebuildPost;
}

function traduireEnFrancais ($mot, $dictionnary) {
    if(in_array ($mot , $dictionnary)) {
        return array_search ($mot, $dictionnary);
    }
}

function traduireEnAnglais ($mot, $dictionnary) {
    if(array_key_exists($mot , $dictionnary)) {
        
        return $dictionnary[$mot];
    }       
        
}




$dictionnary = [
    'chat' => 'cat',
    'chien' => 'dog', 
];

//Je verifie si le post existe et si il contient quelque choses
if (isset($_POST) && !empty ($_POST)) {
     //je récupère les données du formulaire
    $post = $_POST;
    $cleanPost = cleanPost($post);
    
    
    var_dump($cleanPost);
    
    $direction = $cleanPost['choix'];
    $mot = $cleanPost['mot'];
    $translate = '';
    

    //verifier si on a la clé dans le tableau
    if (array_key_exists('choix', $cleanPost) && array_key_exists ('mot', $cleanPost)) {
        //dans quel direction traduire
        if($direction == 'Francais anglais') {
            $translate = traduireEnAnglais($mot, $dictionnary);
            //j'affiche cat
        }
        
         if ($direction == 'English to French') {
             $translate = traduireEnFrancais($mot, $dictionnary);
         }
         
         echo $translate;
    
    }
}
