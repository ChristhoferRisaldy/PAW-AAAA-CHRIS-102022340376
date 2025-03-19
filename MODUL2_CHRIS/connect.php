<?php
// host
$host = "localhost";
// username
$username = "root";
// password
$password = "";
// database
$database = "db_book";
// port
$port = 3306;

// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);

// check conn
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>