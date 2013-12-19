<br><br>
<div class="bj_msgs">

    <div class="green">
        <?php

        if($playerScore == 21){
            
            print "Yipeee!<br>You have BlackJack!<br>You Win!";

            // db insert records
            $addRecordQuery = "insert into blackjack_games set username='$ses_username',player_score='$playerScore',dealer_score='$dealerScore',result='won'";
            mysql_query($addRecordQuery, $c) or die("something wrong!");
            
        }

        if (isset($gameover) && @$_POST['submitAction'] == 'HOLD'){
            
            if ($dealerScore < $playerScore){
                
                print "Yes!<br>Nice Hold There!<br>You Win!";

                // db insert records
                $addRecordQuery = "insert into BlackJack set username='$ses_username',player_score='$playerScore',dealer_score='$dealerScore',result='won'";
                mysql_query($addRecordQuery, $c) or die("something wrong!");
                
            }
            
        }

        ?>
    </div>
	
    <div class="red">
        <?php

        if($dealerScore == 21){

            print "Bad Luck!<br>Dealer Has BlackJack!<br>You Lose!";

            // db insert records
            $addRecordQuery = "insert into BlackJack set username='$ses_username',player_score='$playerScore',dealer_score='$dealerScore',result='lost'";
            mysql_query($addRecordQuery, $c) or die("something wrong!");

        }

        if($playerScore > 21){
            
            print "Ouch!<br> Your score exceeded 21!<br> You Bust! Dealer Wins!";

            // db insert records
            $addRecordQuery = "insert into BlackJack set username='$ses_username',player_score='$playerScore',dealer_score='$dealerScore',result='lost'";
            mysql_query($addRecordQuery, $c) or die("something wrong!");
                
        }

        if (isset($gameover) && @$_POST['submitAction'] == 'HOLD'){
            
            if ($dealerScore > $playerScore){
                
                print "Ohh!<br>Bad Hold!<br>Dealer Wins!";

                // db insert records
                $addRecordQuery = "insert into BlackJack set username='$ses_username',player_score='$playerScore',dealer_score='$dealerScore',result='lost'";
                mysql_query($addRecordQuery, $c) or die("something wrong!");
            
            }
                
        }

        ?>
    </div>
	
    <div class="orange">
    <?php

    if (isset($gameover)){
        
        if($dealerScore == $playerScore){
            
            print "Weird! Its a draw!";

            // db insert records
            $addRecordQuery = "insert into BlackJack set username='$ses_username',player_score='$playerScore',dealer_score='$dealerScore',result='draw'";
            mysql_query($addRecordQuery, $c) or die("something wrong!");
        
        }
    }

    ?>
    </div>
	
</div>

