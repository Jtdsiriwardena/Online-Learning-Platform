<?php

$dbhost = "localhost";    
$dbuser = "root";         
$dbpass = "";         
$dbname = "alphalearner_db";  



$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


if (!$con) {
    die("failed to connect ! " . mysqli_connect_error());
}

?>