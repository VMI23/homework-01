<?php
/**
Using dump method, dump out all 3 values.*/

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

foreach ($person as $param){
    var_dump($param);
    echo PHP_EOL;
}

//or

var_dump($person->name, $person->surname, $person->age);