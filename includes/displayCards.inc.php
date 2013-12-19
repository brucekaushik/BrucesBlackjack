<?php

// display dealer's cards
print "<div class='dealersCards centeralign'>";

    print"<h4 class='centeralign'>Dealer's Cards</h4>";

    if(isset($gameover)){
        print "<img src='$cardsDeck[$val_dc1]' class='dc card '>";
    }else{
        print "<img src='$cardsDeck[0]' class='dc card'>";
    }

    print "<img src='$cardsDeck[$val_dc2]' class='dc card '>";

print "</div>";


// display the player's cards
print "<div class='playersCards centeralign'>";

    print"<h4 class='centeralign'>Your Cards</h4>";

    if($_GET['BeginGame'] == "yes"){

        print "<img src='$cardsDeck[$val_pc1]' class='pc card '>";
        print "<img src='$cardsDeck[$val_pc2]' class='pc card '>";
        
    }
    
    if(isset($genpc3)){
        
        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc3]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=3 ){
            print "<img src='$cardsDeck[$val_pc3]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 4 ){
            print "<img src='$cardsDeck[$val_pc3]' class='pc card '>";
        }
                
    }
	
    if(isset($genpc4)){
        
        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc4]' class='pc card '>";	
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=4 ){
            print "<img src='$cardsDeck[$val_pc4]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 5 ){
            print "<img src='$cardsDeck[$val_pc4]' class='pc card '>";
        }
            
    }
	
    if(isset($genpc5)){
        
        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc5]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=5 ){
            print "<img src='$cardsDeck[$val_pc5]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 6 ){
            print "<img src='$cardsDeck[$val_pc5]' class='pc card '>";
        }
        
    }
	
    if(isset($genpc6)){

        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc6]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=6 ){
            print "<img src='$cardsDeck[$val_pc6]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 7 ){
            print "<img src='$cardsDeck[$val_pc6]' class='pc card '>";
        }
        
    }
	
    if(isset($genpc7)){

        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc7]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=7 ){
            print "<img src='$cardsDeck[$val_pc7]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 8 ){
            print "<img src='$cardsDeck[$val_pc7]' class='pc card '>";
        }

    }
	
    if(isset($genpc8)){
        
        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc8]' class='pc card '>";
        }if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=8 ){
            print "<img src='$cardsDeck[$val_pc8]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 9 ){
            print "<img src='$cardsDeck[$val_pc8]' class='pc card '>";
        }
            
    }
	
    if(isset($genpc9)){
        
        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc9]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=9 ){
            print "<img src='$cardsDeck[$val_pc9]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 10 ){
            print "<img src='$cardsDeck[$val_pc9]' class='pc card '>";
        }
            
    }
	
    if(isset($genpc10)){

        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc10]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=10 ){
            print "<img src='$cardsDeck[$val_pc10]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 11 ){
            print "<img src='$cardsDeck[$val_pc10]' class='pc card '>";
        }
        
    }
	
    if(isset($genpc11)){

        if(!isset($gameover)){
            print "<img src='$cardsDeck[$val_pc11]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HIT' && @$gameover && $lastGen >=11 ){
            print "<img src='$cardsDeck[$val_pc11]' class='pc card '>";
        }
        if(@$_POST['submitAction'] == 'HOLD' && $lastGen >= 12 ){
            print "<img src='$cardsDeck[$val_pc11]' class='pc card '>";
        }
        
    }

print "</div>";

if (!isset($gameover)){
	
    // submit form
    print "<br><center><form name='hithold' method='post' action='home.php?BeginGame=yes'>";
		
        print "<input type='hidden' name='dc1' value='$val_dc1'>";
        print "<input type='hidden' name='dc2' value='$val_dc2'>";
        print "<input type='hidden' name='pc1' value='$val_pc1'>";
        print "<input type='hidden' name='pc2' value='$val_pc2'>";

        if(isset($_POST['pc2'])){
            print "<input type='hidden' name='pc3' value='$val_pc3'>";
        }

        if(isset($_POST['pc3'])){
            print "<input type='hidden' name='pc4' value='$val_pc4'>";
        }

        if(isset($_POST['pc4'])){
            print "<input type='hidden' name='pc5' value='$val_pc5'>";
        }

        if(isset($_POST['pc5'])){
            print "<input type='hidden' name='pc6' value='$val_pc6'>";
        }

        if(isset($_POST['pc6'])){
            print "<input type='hidden' name='pc7' value='$val_pc7'>";
        }

        if(isset($_POST['pc7'])){
            print "<input type='hidden' name='pc8' value='$val_pc8'>";
        }

        if(isset($_POST['pc8'])){
            print "<input type='hidden' name='pc9' value='$val_pc9'>";
        }

        if(isset($_POST['pc9'])){
            print "<input type='hidden' name='pc10' value='$val_pc10'>";
        }

        if(isset($_POST['pc10'])){
            print "<input type='hidden' name='pc11' value='$val_pc11'>";
        }

        // send scores of users
        print "<input type='hidden' name='dealerScore' value='$dealerScore'>";
        print "<input type='hidden' name='playerScore' value='$playerScore'>";

        // display the HIT and HOLD buttons
        print "<input type='submit' name ='submitAction' value='HIT'> &nbsp;&nbsp;&nbsp;";
        print "<input type='submit' name ='submitAction' value='HOLD'>";
			
    print "</form></center>";
	
}

if (isset($gameover)){
    print "<br><br><a href='home.php?BeginGame=yes' class='buttonAnchor' style='width: 30%' >Start New Game</a>";
}

print "<br><br>";

?>