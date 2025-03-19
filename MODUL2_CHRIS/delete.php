<?php
include 'connect.php';

// Check if there is data sent
if (isset($_GET[' '])) {
    $id = $_GET['id'];

    // Define query to delete data


    // Run the query


    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data failed to be deleted');</script>";
    }
}
?>