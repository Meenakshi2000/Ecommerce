<?php

require "config/constants.php";
// mysql.default_socket = /path/to/mysql.sock

$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = "store_db";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>