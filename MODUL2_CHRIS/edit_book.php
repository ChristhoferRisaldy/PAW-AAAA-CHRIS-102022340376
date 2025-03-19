<?php
include('connect.php');

// Check if there is data sent
if (isset($_GET[' '])){
    $id = $_GET[''];

    // Define query to show data

    $data = mysqli_query($conn,$query);
    $book = mysqli_fetch_assoc($data);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include('navbar.php');?>
    <center>
        <div class="container">
            <h1>Change Book Details</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="title" id="title" value="<?=$book['title']?>" required>
                                <label for="title">title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="writer" id="writer" value="<?=$book['writer']?>">
                                <label for="writer">writer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="release_date" id="release_date" value="<?=$book['release_date']?>" required>
                                <label for="release_date">Release Date</label>
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>

</body>
</html>