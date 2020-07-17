<?php

function clean($string) {
    return htmlspecialchars(htmlentities($string));
}


function cleanGET($get) {
    $rebuildGet = [];
    
    foreach($get as $key => $value ) {
                        // <script>
        $cleanValue = clean($value);
        $cleanKey = clean($key);
       // &lt;script&gt;
    
        $rebuildGet[$cleanKey] = $cleanValue;
        
        //$rebuildPost['lastname'] = '&lt;script&gt;';
        
    
    }
    
    return $rebuildGet;
    
}