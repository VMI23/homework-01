<?php
/**Exercise 1
Given variables (int) 10, string "10" determine if they both are the same.*/

$int = 10;
$string = "10";

/**compares without checking their data types.  */
if ($int == $string){
    echo " int(10) == string('10' values are the same) ";
}
echo PHP_EOL;
/**compares values of variables and checks their data types.  */
echo ($int === $string) ? ( " values and date type identical") : ( " int(10) === string('10') are not identical");
