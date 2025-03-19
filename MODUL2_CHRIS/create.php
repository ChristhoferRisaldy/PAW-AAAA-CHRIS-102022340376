<?php
include 'connect.php';

// Check if there is data sent
if (isset($_POST['create'])) {
    $title = $_POST["title"];
    $writer = $_POST["writer"];
    $release_date = $_POST["release_date"];


    // Define query to insert data
    $query = "INSERT INTO tb_book (title, writer, release_date) 
    VALUES ('$title', '$writer', '$release_date')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data failed to be Added');</script>";
    }
}
?>