<?php
$handle = fopen('todolist.csv', 'w');

$data = [];

foreach($data as $task) {
    fputcsv($data,$task);
}

fclose($handle); 

header('location: index.php');