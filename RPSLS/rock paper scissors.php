<?php


$elements =[
    'rock',
    'scissors',
    'paper',

];


$userInput = readline("Please select: rock - paper - scissors ");


echo PHP_EOL;
echo "User`s selection: ".$userInput;
echo PHP_EOL;

while(!in_array($userInput, $elements))
{
    echo " Invalid Input";
    $userInput = readline("Please select: rock - paper - scissors - lizard - spock ");
    echo PHP_EOL;

}

$pcRandom = rand(0,count($elements)-1);
$pcChoice = $elements[$pcRandom];
echo PHP_EOL;
echo "Pc`s selection: ".$pcChoice;
echo PHP_EOL;

//tie case
//all cases when u win
//else u loose


if($pcChoice === $userInput){
    echo "It is a draw!";
    echo PHP_EOL;
}elseif (($userInput === "rock" && $pcChoice === "scissors") ||
    ($userInput === "scissors" && $pcChoice === "paper") ||
    ($userInput === "paper" && $pcChoice === "rock"))
{
    echo "You Win!";
    echo PHP_EOL;
}else{
    echo "You Loose!";
    echo PHP_EOL;
};