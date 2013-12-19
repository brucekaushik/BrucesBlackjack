<?php

// for calculating number of wins.. 
$userDetailsQuery = "select result from BlackJack where username='$ses_username' and result='won'";
$userDetailsRes = mysql_query($userDetailsQuery, $c) or die("something wrong!");

$won = 0;
while($userDetailsRow = mysql_fetch_array($userDetailsRes, MYSQL_ASSOC)){
    $won++;
} 


// for calculating number of loses.. 
$userDetailsQuery = "select result from BlackJack where username='$ses_username' and result='lost'";
$userDetailsRes = mysql_query($userDetailsQuery, $c) or die("something wrong!");

$lost = 0;
while($userDetailsRow = mysql_fetch_array($userDetailsRes, MYSQL_ASSOC)){
    $lost++;
} 

// for calculating number of draws.. 
$userDetailsQuery = "select result from BlackJack where username='$ses_username' and result='draw'";
$userDetailsRes = mysql_query($userDetailsQuery, $c) or die("something wrong!");

$drawn = 0;
while($userDetailsRow = mysql_fetch_array($userDetailsRes, MYSQL_ASSOC)){
    $drawn++;
} 

?>
 
<table id="userStats">

    <tr>
        <th>Your Stats</th>
    </tr>

    <tr>
        <td>Won</td>
        <td><?=$won ?></td>
    </tr>
    <tr>
        <td>Lost</td>
        <td><?=$lost ?></td>
    </tr>
    <tr>
        <td>Drawn</td>
        <td><?=$drawn ?></td>
    </tr>
	
</table>