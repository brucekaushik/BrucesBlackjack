<?php

session_start();

$_SESSION['verify_back_to'] = "../BrucesBlackjack/home.php";

// redirect to home page
header ("Location: ../BrucesAdminArea/index.php?action=VerifyLogin");

?>
