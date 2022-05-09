<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dBName = "exam333";
//$servername = "https://lemon.beget.com/phpMyAdmin";
//$username = "alexsoft_user59";
//$password = "0GWWr8t%";
//$dBName = "alexsoft_user59";

$conn = mysqli_connect($servername, $username, $password, $dBName);
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
//if (function_exists('mysqli_connect')) {
//    echo "mysqli exists.<br />";
//} else {
//    echo phpinfo();
//}

