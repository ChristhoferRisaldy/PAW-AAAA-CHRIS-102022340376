<?php
include 'connect.php';

// ==================1==================
// Definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
// Save the data sent from the POST request to variables
if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $publishing_year = $_POST['publishing_year'];
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    // Define $query to connect to the database
    $query = "INSERT INTO tb_book (title, writer, publishing_year) VALUES ('$title', '$writer', '$publishing_year')";

    // ==================3==================
    // Eksekusi query
    // Execute the query
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>