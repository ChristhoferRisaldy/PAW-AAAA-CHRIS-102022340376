<?php
include 'connect.php';

// Check if there is data sent
if (isset($_POST[' '])) {
    $id = $_GET[' '];
    $title = $_POST[' '];
    $writer = $_POST[' '];
    $release_date = $_POST[' '];    


    // Make a query to update data
    

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data failed to be added');</script>";
    }
}
?>