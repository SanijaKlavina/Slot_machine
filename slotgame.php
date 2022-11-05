<?php
$symbols = ["#", "7", "$", "%", "@"];
$slotBoard = [];

$combinations = [
    [[0,0], [0,1], [0,2], [0,3]],
    [[1,0], [1,1], [1,2], [1,3]],
    [[2,0], [2,1], [2,2], [2,3]],
];


function randBoard(array &$slotBoard,array $symbols){
    $slotBoard= [
        [$symbols[array_rand($symbols)], $symbols[array_rand($symbols)],$symbols[array_rand($symbols)], $symbols[array_rand($symbols)]],
        [$symbols[array_rand($symbols)], $symbols[array_rand($symbols)],$symbols[array_rand($symbols)], $symbols[array_rand($symbols)]],
        [$symbols[array_rand($symbols)], $symbols[array_rand($symbols)],$symbols[array_rand($symbols)], $symbols[array_rand($symbols)]],
    ];
}

function displayIt(array $slotBoard)
{

    foreach ($slotBoard as $row) {
        foreach ($row as $col) {
            echo "|$col|";
        }
        echo "\n";
    }
}

$payTable =[
    '#'=>[3,15,150],
    '$'=>[5,25,170],
    '%'=>[8,40,300],
    '@'=>[10,25,500],
    '7'=>[30,90,700],
];

$playerMoney = 200;
echo "Welcome to 7 Casino! Will You be the lucky 7?\n";
echo "One spin - 50.You have {$playerMoney}.\n";

while($playerMoney >= 50){
    $startSpin = readline(" Write 'S' to play: \n");
    if($startSpin !== 'S' && $startSpin !== 's' ){
        echo "Game over. See you next time!:) \n";
        exit;
    }

    $playerMoney-=50;
    randBoard($slotBoard, $symbols);
    displayIt($slotBoard);
    $winAmount = 0;
    foreach ($combinations as $key => $combination) {
        $count = 0;
        [$y, $x] = $combination[0];
        $symbol = $slotBoard[$y][$x];
        foreach ($combination as $coordinates) {
            [$y, $x] = $coordinates;
            if ($slotBoard[$y][$x] === $symbol) {
                $count++;
            } else break;
        }
        if ($count > 1) {
            $winAmount += $payTable[$symbol][$count - 2];
        }
    }
    $playerMoney+=$winAmount;
    echo $winAmount. PHP_EOL;
    echo "One spin - 20.You have {$playerMoney}.\n";
}

echo "Not enough money! See you next time!:) \n";