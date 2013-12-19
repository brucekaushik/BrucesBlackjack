<?php

// HOME PAGE FOR BLACKJACK GAME

// start a session
session_start();

$ses_score = 0;
session_register("ses_score");

// include database connections
require 'includes/dbConnect.inc.php';

echo "Username => " . $ses_username . "<br>";
echo "User Level =>" . $ses_user_level . "<br>";
echo "User Active? => " . $ses_user_active . "<br>";
echo "Logged In? => " . $ses_loggedin . "<br>";
echo "Logged Out? => " . $ses_loggedout . "<br>";
echo "Score => " . $ses_score . "<br>";

// if user is logged in, user is active..
if($ses_loggedin == "yes" && $ses_user_active == "yes"){

?>

<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Bruce's Blackjack</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <div class="centeralign">
        <a href='../08-adminArea/home.php?action=logout'>Logout</a>
    </div>

    <div class="wrapper">

        <div class="header">

            <h1>Bruce's Blackjack</h1>

        </div>

    <?php 

    // if user did not click on "Begin Game" button
    if (!isset($_GET['BeginGame'])) {	
		
        // include start of game instructions
        require 'includes/startOfGameInstructions.inc.php';

    }
    // if user clicked on "Begin Game" button 
    else{
        
        // connect to database
        require 'includes/dbConnect.inc.php';
        
        // include deck and values
        require 'includes/cardsNvalues.inc.php';
        
        // include the functions required
        require 'includes/functions.inc.php';
        
        // generate cards
        require 'includes/generateCards.inc.php';
            
        /*
        print "<pre>";
        print_r($dealtCards);
        print "</pre>";

        print "<pre>";
        print_r($_POST);
        print "</pre>";
        
        echo $dealerScore . "<br>";
        echo $playerScore . "<br>";
        //*/
                
        // check for game over
        require 'includes/checkGameOver.inc.php';
        
        // column1
        print "<div class='column1'>";

            // display scores
            require 'includes/displayScores.inc.php';

            // display timer
            //require 'includes/displayTimer.inc.php';

            // display messages
            // also insert the result into the database
            require 'includes/displayMessages.inc.php';
         
        print "</div>";
		
        // column2
        print "<div class='column2'>";

            // display cards
            require 'includes/displayCards.inc.php';

        print "</div>";
        
        // column 3
        print "<div class='column3'>";

            // user history
            require 'includes/userHistory.inc.php';

        print "</div>";
        
    }

    ?>

<?php } ?>

    </div>
</body>
</html>