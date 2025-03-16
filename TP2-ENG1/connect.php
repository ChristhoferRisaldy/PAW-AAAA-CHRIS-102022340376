<?php
// ==================1==================
// Define variables to connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "db_library";
// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
// Define $conn to connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>