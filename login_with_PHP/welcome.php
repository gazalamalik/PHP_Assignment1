<?php
session_start();
echo "Welcome : " . $_SESSION['user'];

// Return current date from the remote server
echo "<br>today date is  :";
$today = date("d/m/Y");
echo $today; 
echo "<br>";

/* Return current date and time 
from the remote server as timestamp 

$timestamp = time();
echo "timestamp is :";
echo($timestamp);
echo "<br>";

// Converting timestamp to human readable format
echo(date("F d, Y h:i:s", $timestamp));
*/



echo "time is :";
echo date('H:i');
$var = date('H:i');


echo "<br>click here if you want to log out <a href ='logout.php'><br>logout</a><br>";

echo "click here for coockie <a href ='coockie.php'><br>coockie</a>";


?>