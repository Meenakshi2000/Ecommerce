<?php

// require "config/constants.php";
// // mysql.default_socket = /path/to/mysql.sock

// $servername = HOST;
// $username = USER;
// $password = PASSWORD;
// $db = "store_db";

// // Create connection
// $con = mysqli_connect($servername, $username, $password,$db);

// // Check connection
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("eu-cdbr-west-03.cleardb.net"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>