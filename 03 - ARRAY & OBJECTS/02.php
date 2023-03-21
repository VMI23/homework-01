<?php
/**Exercise 2
Given array
Using dump method, dump out all 3 values.*/

$person = [
"name" => "John",
"surname" => "Doe",
"age" => 50
];

foreach($person as $param){
    var_dump($param);
    echo PHP_EOL;
}

//or

var_dump($person['name'], $person['surname'], $person['age']);