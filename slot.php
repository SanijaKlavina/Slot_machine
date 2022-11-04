<?php
/*
   Izveidot board masīvu 4X3.

   izveidot mainīgo ar sākuma naudas summu.

   izveidot funkciju, kas attēlo šo board.

   izveidot masīvu ar pieejamajiem simboliem.

   katrai simbolu kombinācijai piešķirt vērtību.

   ? Izveidot

   izveidot programmu, kas pieliek klāt naudu,
   kad ir kāda no kombinācijām (atbilstoši summai,
    ko var iegūt ar kombināciju.

   spēli var spēlēt, kamēr spēlētāja nauda ir lielāka par 0.
   spēles maksa.

   pārbaudīt vai spēlētājam ir pieejama nauda - ja nav,
   tad 'parādīt ka nav naudas' un spēli nevar spēlēt.


*/


// Nauda
$playerMoney = 200;
$gamePrice = 50;

//Slot simboli
$symbols = ["#", "7", "$", "%", "@"];

$cell = $symbols[array_rand($symbols)];
$cell2 = $symbols[array_rand($symbols)];
$cell3 = $symbols[array_rand($symbols)];
$cell4 = $symbols[array_rand($symbols)];
$cell5= $symbols[array_rand($symbols)];
$cell6 = $symbols[array_rand($symbols)];
$cell7 = $symbols[array_rand($symbols)];
$cell8 = $symbols[array_rand($symbols)];
$cell9= $symbols[array_rand($symbols)];
$cell10 = $symbols[array_rand($symbols)];
$cell11 = $symbols[array_rand($symbols)];
$cell12 = $symbols[array_rand($symbols)];
//(Noteikti ir īsāks veids, kā to izdarīt - labprāt uzzinātu:))

//slot laukums.
$slotBoard = [
    [$cell,$cell2,$cell3,$cell4],
    [$cell5,$cell6,$cell7,$cell8],
    [$cell9,$cell10,$cell11,$cell12],
];

$combinations = [
    [[0,0], [0,1], [0,2], [0,3]],
    [[1,0], [1,1], [1,2], [1,3]],
    [[2,0], [2,1], [2,2], [2,3]],
];

function displayIt(array $slotBoard){
    echo"{$slotBoard[0][0]} | {$slotBoard[0][1]} | {$slotBoard[0][2]} | {$slotBoard[0][3]}   \n";
    echo"{$slotBoard[1][0]} | {$slotBoard[1][1]} | {$slotBoard[1][2]} | {$slotBoard[1][3]}   \n";
    echo"{$slotBoard[2][0]} | {$slotBoard[2][1]} | {$slotBoard[2][2]} | {$slotBoard[2][3]}   \n";
}

// Text displayed in the terminal
/*echo "Welcome to 7 Casino! Will You be the lucky 7?\n";
echo "One spin - {$gamePrice}$.You have {$playerMoney}.\n";
$startSpin = readline(" Write 'S' to play: \n");*/

while(true){
    echo "Welcome to 7 Casino! Will You be the lucky 7?\n";
    echo "One spin - {$gamePrice}$.You have {$playerMoney}.\n";
    $startSpin = readline(" Write 'S' to play: \n");


    if($startSpin !== 'S' && $startSpin !== 's'){
        echo "Invalid spin key.\n";
        exit;
    } else if($playerMoney < 50){
        echo "Not enough money!\n";
        exit;
    } else{
        $playerMoney = $playerMoney - $gamePrice;
        displayIt($slotBoard);
    }
}

// Nesaprotu, kāpēc mans board atkārtojas while loop








