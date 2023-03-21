<?php
/**
Create a non-associative array with 3 integer values and display the total sum of them.*/

$integers = [
    10,
    20,
    30
];

$sum=0;
foreach ($integers as $integer){
       $sum += $integer;
}

echo $sum;