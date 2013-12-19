<?php

if ($_GET['BeginGame'] == "yes"){
			
    // create dealt cards array
    $dealtCards = Array();
	
	
    /* procedure for generating cards and adding to dealt cards array.

    generate a random value for CARDNAME using dealHand()
    check repeatedly if $val_CARDNAME exists in the $dealtCards
    when it does not (means we got a new card) add it do  $dealtCards
    */
	
    // for dc1 (delar card 1)
    if(!isset($_POST['dc1'])){
        $val_dc1 = dealHand();
        $val_dc1 = checkRepeatedly($val_dc1, $dealtCards);
        $dealtCards['dc1'] = $val_dc1;

    }else{
        $val_dc1 = $_POST['dc1'];
        $dealtCards['dc1'] = $val_dc1;
    }
	
    // for dc2
    if(!isset($_POST['dc2'])){

        $val_dc2 = dealHand();
        $val_dc2 = checkRepeatedly($val_dc2, $dealtCards);
        $dealtCards['dc2'] = $val_dc2;

    }else{
        $val_dc2 = $_POST['dc2'];
        $dealtCards['dc2'] = $val_dc2;
    }
	
    // for pc1 (player card 1)
    if(!isset($_POST['pc1'])){

        $val_pc1 = dealHand();
        $val_pc1 = checkRepeatedly($val_pc1, $dealtCards);
        $dealtCards['pc1'] = $val_pc1;
        $lastGen = 'pc1';
        $genpc1 = 'pc1';

    }else{
        $val_pc1 = $_POST['pc1'];
        $dealtCards['pc1'] = $val_pc1;
        $genpc1 = 'pc1';
    }
	
	
    // for pc2
    if(!isset($_POST['pc2'])){

        $val_pc2 = dealHand();
        $val_pc2 = checkRepeatedly($val_pc2, $dealtCards);
        $dealtCards['pc2'] = $val_pc2;
        $lastGen = 'pc2';
        $genpc2 = 'pc2';

    }else{
        $val_pc2 = $_POST['pc2'];
        $dealtCards['pc2'] = $val_pc2;
        $genpc2 = 'pc2';
    }

    // calculate scores
    $dealerScore = $cardValues[$val_dc1]+$cardValues[$val_dc2];
    $playerScore = $cardValues[$val_pc1]+$cardValues[$val_pc2];
					
}

// if the second card is generated
if(isset($_POST['pc2'])){
	
    // generate pc3
    if(!isset($_POST['pc3'])){
        $val_pc3 = dealHand();
        $val_pc3 = checkRepeatedly($val_pc3, $dealtCards);
        $dealtCards['pc3'] = $val_pc3;
        $lastGen = 3;
        $genpc3 = 'generated';

    }else{
        $val_pc3 = $_POST['pc3'];
        $dealtCards['pc3'] = $val_pc3;
        $genpc3 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc3];
				
}

// if the third card is generated
if(isset($_POST['pc3'])){
	
    // generate pc4
    if(!isset($_POST['pc4'])){
        $val_pc4 = dealHand();
        $val_pc4 = checkRepeatedly($val_pc4, $dealtCards);
        $dealtCards['pc4'] = $val_pc4;
        $lastGen = 4;
        $genpc4 = 'generated';
    }else{
        $val_pc4 = $_POST['pc4'];
        $dealtCards['pc4'] = $val_pc4;
        $genpc4 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc4];
			
}
		
// if the fourth card is generated
if(isset($_POST['pc4'])){
	
    // generate pc5
    if(!isset($_POST['pc5'])){
            $val_pc5 = dealHand();
            $val_pc5 = checkRepeatedly($val_pc5, $dealtCards);
            $dealtCards['pc5'] = $val_pc5;
            $lastGen = 5;
            $genpc5 = 'generated';

    }else{
            $val_pc5 = $_POST['pc5'];
            $dealtCards['pc5'] = $val_pc5;
            $genpc5 = 'generated';
    }
	
    $playerScore=$playerScore+$cardValues[$val_pc5];
			
}

// if the fifth card is generated
if(isset($_POST['pc5'])){
	
    // generate pc6
    if(!isset($_POST['pc6'])){
        $val_pc6 = dealHand();
        $val_pc6 = checkRepeatedly($val_pc6, $dealtCards);
        $dealtCards['pc6'] = $val_pc6;
        $lastGen = 6;
        $genpc6 = 'generated';

    }else{
        $val_pc6 = $_POST['pc6'];
        $dealtCards['pc6'] = $val_pc6;
        $genpc6 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc6];
				
}

// if the sixth card is generated
if(isset($_POST['pc6'])){
	
    // generate pc7
    if(!isset($_POST['pc7'])){
        $val_pc7 = dealHand();
        $val_pc7 = checkRepeatedly($val_pc7, $dealtCards);
        $dealtCards['pc7'] = $val_pc7;
        $lastGen = 7;
        $genpc7 = 'generated';

    }else{
        $val_pc7 = $_POST['pc7'];
        $dealtCards['pc7'] = $val_pc7;
        $genpc7 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc7];
				
}

// if the seventh card is generated
if(isset($_POST['pc7'])){
	
    // generate pc8
    if(!isset($_POST['pc8'])){
        $val_pc8 = dealHand();
        $val_pc8 = checkRepeatedly($val_pc8, $dealtCards);
        $dealtCards['pc8'] = $val_pc8;
        $lastGen = 8;
        $genpc8 = 'generated';

    }else{
        $val_pc8 = $_POST['pc8'];
        $dealtCards['pc8'] = $val_pc8;
        $genpc8 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc8];
				
}

// if the eighth card is generated
if(isset($_POST['pc8'])){
	
    // generate pc9
    if(!isset($_POST['pc9'])){
        $val_pc9 = dealHand();
        $val_pc9 = checkRepeatedly($val_pc9, $dealtCards);
        $dealtCards['pc9'] = $val_pc9;
        $lastGen = 9;
        $genpc9 = 'generated';

    }else{
        $val_pc9 = $_POST['pc9'];
        $dealtCards['pc9'] = $val_pc9;
        $genpc9 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc9];
				
}

// if the ninth card is generated
if(isset($_POST['pc9'])){
	
    // generate pc10
    if(!isset($_POST['pc10'])){
        $val_pc10 = dealHand();
        $val_pc10 = checkRepeatedly($val_pc10, $dealtCards);
        $dealtCards['pc10'] = $val_pc10;
        $lastGen = 10;
        $genpc10 = 'generated';

    }else{
        $val_pc10 = $_POST['pc10'];
        $dealtCards['pc10'] = $val_pc10;
        $genpc10 = 'generated';
    }
	
    $playerScore=$playerScore+$cardValues[$val_pc10];
				
}

// if the tenth card is generated
if(isset($_POST['pc10'])){
	
    // generate pc11
    if(!isset($_POST['pc11'])){
        $val_pc11 = dealHand();
        $val_pc11 = checkRepeatedly($val_pc11, $dealtCards);
        $dealtCards['pc11'] = $val_pc11;
        $lastGen = 11;
        $genpc11 = 'generated';

    }else{
        $val_pc11 = $_POST['pc11'];
        $dealtCards['pc11'] = $val_pc11;
        $genpc11 = 'generated';
    }

    $playerScore=$playerScore+$cardValues[$val_pc11];
				
}

?>