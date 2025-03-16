<!-- UPDATE THE DATA USING QUERY, IF THE DATABASE UPDATED SUCCESSFULLY, REDIRECT THE PAGE TO catalog_book.php page-->
<?php
include 'connect.php';
// ==================1==================
// Buat If statement untuk mengambil _POST untuk update
// Simpan variabel untuk menyimpan data yang dikirim melalui form
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $writer = $_POST['writer'];
    $publishing_year = $_POST['publishing_year'];
    


    // ==================2==================
    // Buatlah query untuk meng-update 
    $query = "UPDATE tb_book SET title='$title', writer='$writer', publishing_year='$publishing_year' WHERE id='$id'";

    // ==================3==================
    // Eksekusi query
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>