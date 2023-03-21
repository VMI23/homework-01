<?php
/**Imagine you own a gun store. Only certain guns can be purchased with license types.
  Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash.
  Guns are objects stored within an array. Each gun has license letter, price & name.
  Using PHP in-built functions determine if the requester (person) can buy a gun from the store.*/
//
//$person = new stdClass();
//$person->name = "John";
//$person->licenses = [
//    'license1'=> 'A',
//    'license2' => 'D'
//];
//$person->cash = 1000;
//
//$guns = [
//    [
//        'name'=>'Pistol',
//        'licenseLetter'=>'A',
//        'price'=>100
//    ],
//    [
//        'name'=>'Rifle',
//        'licenseLetter'=>'C',
//        'price'=>200
//    ],
//    [
//        'name'=>'Machine-Gun',
//        'licenseLetter'=>'D',
//        'price'=>800
//    ]
//];
//
//function isEligibleToBuy($person, $guns){
//    foreach ($guns as $gun){
//        foreach ($person->licenses as $license){
//        if($license === $gun['licenseLetter'] && $person->cash > $gun['price']){
//            echo $person->name.' has valid license '.$license." to buy {$gun['name']} and has enough funds to buy ".
//                floor(($person->cash/$gun['price']))." {$gun['name']}" ;
//            echo PHP_EOL;
//
//        }
//    }}
//
//}
//
//isEligibleToBuy($person, $guns);




//skolotaja variants

$person = new stdClass();
$person->name = "John";
$person->cash = 5000; //10.99 => 10.99 =>1099
$person->licenses = ['A', 'B'];



//$knife = new stdClass();
//$knife->name = 'Knife';
//$knife->price = 500;
//$knife->license = 'A';
//
//
//$ak47 = new stdClass();
//$ak47->name = 'AK47';
//$ak47->price = 1000;
//$ak47->license = 'B';




//function to construct weapons
function createWeapon ( string $name, int $price, string $license): stdClass{
    $weapon = new stdClass();
    $weapon->name=$name;
    $weapon->price=$price;
    $weapon->license=$license;
    return $weapon;
}
$weapons = [
    'knife'=>createWeapon("Knife",500, "A"),
    'ak47'=> createWeapon("AK-47",1500, "B"),
    'pistol'=>createWeapon('Pistol', 750, 'F'),


];


$cash = $person->cash/100;
$licenses = implode(', ', $person->licenses);
echo "Welcome $person->name  $ ($cash) [$licenses]";
echo PHP_EOL;
echo '--------------------';
echo  PHP_EOL;

echo "Weapon | Price ($) | Licence";
echo PHP_EOL;

foreach ($weapons as $weapon){

    $price = $weapon->price;
    echo "$weapon->name  |   $ $price     |   $weapon->license". PHP_EOL;
}
echo PHP_EOL;

$selection = readline("Please select weapon:  ");
////check if key exists
//array_key_exists() or isset()

if (!array_key_exists($selection, $weapons)){
    echo 'no such weapon';
    exit;
}
// ak47 - is key
$selectedWeapon = $weapons[$selection];

//$selectedWeapon->license
//$person->licenses

if(!in_array($selectedWeapon->license, $person->licenses)){
    echo 'Invalid license';
}


if($person->cash < $selectedWeapon->price){
    echo "not enough cash";
    exit;
}

//nonemam naudu no pirceja
//remove item from store
//put item in person inventory


$person->cash -=$selectedWeapon->price;
echo PHP_EOL;
echo "You Bought ".$selectedWeapon->name."! It cost: $ ".$selectedWeapon->price."! Your remaining balance is : $ ".$person->cash;
echo PHP_EOL;

