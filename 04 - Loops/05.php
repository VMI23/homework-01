<?php
/**Create an associative array with objects of multiple persons.
Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.*/

$persons=[
    [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 25,
        'birthday' => '1998-05-12'],

    [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 28,
        'birthday' => '1995-09-24'],
    [
        'name' => 'Bob',
        'surname' => 'Smith',
        'age' => 33,
        'birthday' => '1990-02-08'
    ]
];


foreach ($persons as $person){
    echo $person['name'];
    echo PHP_EOL;
    echo $person['surname'];
    echo PHP_EOL;
    echo $person['age'];
    echo PHP_EOL;
    echo $person['birthday'];
    echo PHP_EOL;
}