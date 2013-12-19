<?php

// cards deck array
$cardsDeck = Array();
$cardsDeck[0] = "images/classic-cards/facedown.png";

for($i=1, $j=1; $i<53; $i++){
	
    switch ($i%4){
        case 1:
            $k = 1;
        break;
        case 2:
            $k = 2;
        break;
        case 3:
            $k = 3;
        break;
        case 0:
            $k = 4;
        break;
    }

    $cardsDeck[$i] = "images/classic-cards/"."$j"."_"."$k".".png";

    if($i % 4 == 0){
        $j++;
    }
	
}


// card values array
$cardValues = Array();
$cardValues[0] = "none";


for($i=1, $j=11; $i<5; $i++){
	
    $cardValues[$i] = $j;
	
}

for($i=5, $j=2; $i<41; $i++){
	
    $cardValues[$i] = $j;

    if($i % 4 == 0){
        $j++;
    }
    
}

for($i=41, $j=10; $i<53; $i++){
	
    $cardValues[$i] = $j;
	
}

/*

// view card images urls and card values in a table

print "<table border=1 color=black style='float:right'>";

    print "<tr>";

        print "<td>";
            print "<pre>";
            print_r($cardsDeck);
            print "</pre>";
        print "</td>";

        print "<td>";
            print "<pre>";
            print_r($cardValues);
            print "</pre>";
        print "</td>";

    print "</tr>";

print "</table>";

//*/

?>