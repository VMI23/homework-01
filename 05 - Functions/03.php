<?php
/**Create a person object with name, surname and age.
 * Create a function that will determine if the person has reached 18 years of age.
 * Print out if the person has reached age of 18 or not.
 */

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 14;


function ageCheck($personObj){
    if($personObj->age >= 18){
        echo " Person has reached age of 18";
    }else {
        echo "Person is under the age of 18";
    }
}

ageCheck($person);