<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dBName = "name";


$conn = mysqli_connect($servername, $username, $password, $dBName);
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
//if (function_exists('mysqli_connect')) {
//    echo "mysqli exists.<br />";
//} else {
//    echo phpinfo();
//}

