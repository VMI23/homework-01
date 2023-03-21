<?php
/**Exercise 1
Create an array with integers (up to 10) and print them out using foreach loop.*/

$integers = [
    0,1,2,3,4,5,6,7,8,9,10
];

foreach ($integers as $integer){
    echo $integer;
    echo PHP_EOL;
}