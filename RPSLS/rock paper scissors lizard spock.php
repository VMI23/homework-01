<?php




$elements =[
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "spock" => ["scissors", "rock"],
    "lizard" => ["paper", "spock"]
];

$elementKeys = array_keys($elements);
$userInput = readline("Please type: rock - paper - scissors - lizard - spock ");
echo PHP_EOL;
echo "User`s input: ".$userInput;
echo PHP_EOL;



while(!in_array($userInput, $elementKeys)){
    echo " invalid input";
    $userInput = readline("Please type: rock - paper - scissors - lizard - spock ");
    echo PHP_EOL;
    echo $userInput;
    echo PHP_EOL;
}

$usersChoice = $elements[$userInput];

//var_dump($usersChoice);

$computersInput =array_rand($elements);
echo PHP_EOL;
echo "Computer`s input: ".$computersInput;
echo PHP_EOL;
//$computersChoice = $elements[$computersInput];
//var_dump($computersChoice);


if($computersInput === $userInput){
    echo "It`s a draw!";
    echo PHP_EOL;
}elseif(in_array($computersInput, $usersChoice)){
    echo "You win!";
    echo PHP_EOL;
}else{
    echo "PC win!";
    echo PHP_EOL;
}


