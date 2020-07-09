<?php


$number = 1;
$string = 'string';


$number = 'string'; // string
$string = 'number'; // string


// Constante
define('NOMCONSTANTE', 'valeur'); 
const CONST2 = 'valeur2';
//

$true = true; // boolean
$false = false; // boolean
$float = 1.2; // float
$int = 1; // integer


echo ($float * $int);


echo $number . " " . $string . " " . NOMCONSTANTE . " " . CONST2 . " " . $true . " " . $float  . " " . $int;
// echo $string;
// echo NOMCONSTANTE;
// echo CONST2;
// echo $true;
// echo $float;
// echo $int;

// operateur
// + - / * %
echo "<p>";
    echo ($float % $int);
echo "</p>";

echo "<pre>";
var_dump($string);
var_dump($float);
echo "</pre>";

$array = [$string, $float, $true];
var_dump($array);
for ($i =0; $i <= sizeof($array);$i++){
    echo "<p style=\color:blue;\">". $array[$i]."</p>";
}

while($i < 10){
    echo $i;
    $i++;
}

foreach($array as $element) {
    echo $element;
}


// if() {
    
// } elseif() {
    
// } else {
    
// }


function test() {
    
    return true;
}


// tableau associatif
$array2 = 
[
    "cle" => "valeur",
    "cle2" => "valeur2",
    "cle3" => "valeur3"
];

foreach($array2 as $key => $value) {
    echo "<p>" . $key . "</p>";
    echo "<p>" . $value . "</p>";
    
}


