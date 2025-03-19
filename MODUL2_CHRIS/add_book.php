<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>Add Book</title>
</head>
<body>
    <?php include ("navbar.php") ?>
    <center>
        <div class="container">
            <h1>Add Book</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="title" id="title" required>
                                <label for="title">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="writer" id="writer" required>
                                <label for="writer">Writer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="release_date" id="release_date" required>
                                <label for="release_date">Release Date</label>
                            </div>

                            <button type="submit" name="create" id="create" class="btn btn-primary mb-3 mt-3 w-100">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>