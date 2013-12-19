<div class="bj_scores">
<?php

// display scores;
echo "<center><b>Scores</b></center><br>";
echo "<center>";

    // if dealer score or player score is 21
    if($dealerScore == 21 || $playerScore == 21){

        echo "Dealer Score = $dealerScore<br>";
        echo "Player Score = $playerScore<br>";

    }
    // if $gameover is set
    elseif(isset($gameover)){

        if(@$_POST['submitAction'] == "HIT"){
            echo "Dealer Score = $dealerScore<br>";
            echo "Player Score = $playerScore<br>";
        }

        if(@$_POST['submitAction'] == "HOLD"){
            echo "Dealer Score = $dealerScore<br>";
            $playerScore = $playerScore - $cardValues[$dealtCards["pc".$lastGen]];
            echo "Player Score = $playerScore<br>";
        }

    }
    // in normal case
    else{
        echo "Dealer Score = ??<br>";
        echo "Player Score = $playerScore<br>";	
    }
	
echo "</center>";

?>
</div>