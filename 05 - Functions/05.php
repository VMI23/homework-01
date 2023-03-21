<?php
/**
 * Create a 2D associative array in 2nd dimension with fruits and their weight.
 * Create a function that determines if fruit has weight over 10kg.
 * Create a secondary array with shipping costs per weight.
 * Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
 * Using foreach loop print out the values of the fruits and how much it would cost to ship this product.*/

$fruits=[
    [
        'fruit'=> 'Apple',
        'weight' =>20
    ],
    [
        'fruit'=> 'Orange',
        'weight' => 2
    ],
    [
        'fruit'=> 'Banana',
        'weight' =>15
    ],

];

$shippingCosts = [
  'under 10 kg' => 1,
  'over 10 kg' => 2
];

function shippingCostCalc($prices, $fruits){

    foreach ($fruits as $fruit){
        if($fruit['weight']>10){

            echo "{$fruit['fruit']} has weight over 10kg ({$fruit['weight']}). Total shipping cost is ".$fruit['weight']*$prices['over 10 kg']." $";
            echo PHP_EOL;
        }else{
            echo "{$fruit['fruit']} has weight less than 10kg ({$fruit['weight']}). Total shipping cost is ".$fruit['weight']*$prices['under 10 kg']." $";
            echo PHP_EOL;
        }
    }

}

shippingCostCalc($shippingCosts, $fruits);