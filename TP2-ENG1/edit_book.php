<?php
include('connect.php');
// ==================1==================
// If statement untuk menyimpan variabel $id dari GET request
// If statement to save $id variable from GET request
if (isset($_GET['id'])){
    $id = $_GET['id'];
    // ==================2==================
    // Definisikan $query untuk mengambil data book berdasarkan id
    // Define $query to get book data based on id
    $query = "SELECT * FROM tb_book WHERE id = '$id'";

    $data = mysqli_query($conn,$query);
    $book = mysqli_fetch_assoc($data);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit book</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include('navbar.php');?>
    <center>
        <div class="container">
            <h1>Edit book details</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="title" id="title" value="<?=$book['title']?>" required>
                                <label for="judul">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="writer" id="writer" value="<?=$book['writer']?>">
                                <label for="writer">Writer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="publishing_year" id="publishing_year" value="<?=$book['publishing_year']?>" required>
                                <label for="publishing_year">Publishing Year</label>
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>

</body>
</html>