<?php

// check for game over
if (isset($_POST['submitAction'])) {
    if ($_POST['submitAction'] == "HOLD") {
        $gameover = "yes";
    }
}
if ($playerScore >= 21) {
    $gameover = "yes";
}

if ($dealerScore == 21) {
    $gameover = "yes";
}

?>