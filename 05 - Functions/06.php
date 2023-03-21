<?php
/**Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
 * Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
 * Create a function that doubles the integer number.
 * Within the loop using php in-built function print out the double of the number value (using your custom function).*/

$elements =[
    21,
    5,
    100,
    4.4,
    'string'
];

function doubleInteger($value){
    if(is_integer($value)){
        echo $value*2;
        echo PHP_EOL;
    }
}

//doubleInteger(2);

for($i =0; $i<count($elements); $i++){
    doubleInteger($elements[$i]);
}