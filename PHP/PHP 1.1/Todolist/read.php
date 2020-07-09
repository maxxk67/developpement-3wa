<?php
$handle = fopen('todolist.csv', 'r'); //j'ouvre le fichier en lecture seul.

//temps qu'il a des lignes dans le fichier , jécris dans le fichier.
$data = [];

while ($line = fgetcsv($handle)) {
    //$data[] = $line;
    array_push($data, $line);
}
