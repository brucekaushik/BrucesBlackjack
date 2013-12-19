<?php

// function to get a random card
function dealHand(){
    return rand(1, 52);
}

// check if a $card is in $cardsArray, if it is in, return "in".
function checkInArray($card, $cardsArray){
    foreach ($cardsArray as $key => $value){
        if($card == $value){
            return "in";
            break;
        }
    }
}

// if $card_is is "in",
// Repeatedly check if $card is in $cardsArray until it is not. 
// if $card_is not in, Return $card
function checkRepeatedly($card, $cardsArray){
	
    $card_is = checkInArray($card, $cardsArray);

    if($card_is == "in"){
        do{
            $card = dealHand();
            $card_is = checkInArray($card ,$cardsArray);
        }while ($card_is == "in");
    }

    if ($card_is != "in") {
        return $card;
    }
	
}

?>