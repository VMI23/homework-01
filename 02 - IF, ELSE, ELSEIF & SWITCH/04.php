<?php
/**By your choice, create condition with 3 checks.
For example, if value is greater than X, less than Y and is an even number.*/

$int = 10;
$valueX = 5;
$valueY = 50;

if($int > $valueX && $int < $valueY && ($int%2 ==0)){
    echo "value is greater than X ({$valueX}), less than Y ({$valueY}) and is an even number!";
}