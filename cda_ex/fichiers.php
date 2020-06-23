<?php

require 'vendor/autoload.php';

$records = [];

$fp = fopen("liens.txt", "r");

while (!feof($fp)){
    $line = fgets($fp, 4096);
    echo $line;
    echo '<br>';

}

fclose("liens.txt");

$fp = fopen("http://bienvu.net/misc/customers.csv", "r");

while (!feof($fp)){
    $line = fgets($fp, 4096);
    $record = explode(",", $line);
    //var_dump($record);
    array_push($records, $record);
}


