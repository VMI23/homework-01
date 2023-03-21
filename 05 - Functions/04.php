<?php
/**Create an array of objects that uses the function of exercise 3
 * but in loop printing out if the person has reached age of 18.
*/

$persons =[
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 12,
        "birthday" => "1992-01-01"
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 25,
        "birthday" => "1996-05-15"
    ],
    [
        "name" => "Bob",
        "surname" => "Smith",
        "age" => 40,
        "birthday" => "1982-12-31"
    ]
];

function ageCheck($personObj){
    foreach ($personObj as $person){
        if ($person['age'] >= 18) {
            echo "{$person['name']} has reached age of 18";
        } else {
            echo "{$person['name']} is under the age of 18";;
        }
        echo PHP_EOL;
    }
}

ageCheck($persons);