<?php
/**Create a variable $plateNumber that stores your car plate number.
 * Create a switch statement that prints out that its your car in case of your number.
 */

$plateNumber = 'KB - 3800';

switch ($plateNumber){
    case 'KB - 3800':
        echo "This is my plate";
        break;
   default:
        echo 'This is not my plate';
}

