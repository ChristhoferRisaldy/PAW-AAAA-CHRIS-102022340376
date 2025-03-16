<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>Tambah Buku</title>
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
                                <!--  ==================1==================  -->
                                <!--  Buatlah input untuk judul yang harus diisi; dengan label  -->
                                <!-- Create input for title, with label -->
                                <input type="string" class="form-control" name="title" id="title" required>
                                <label for="title">title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <!--  ==================2==================  -->
                                <!--  Buatlah input untuk penulis yang harus diisi; dengan label  -->
                                <!-- Create input for writer, with label -->
                                <input type="string" class="form-control" name="writer" id="writer" required>
                                <label for="writer">writer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <!--  ==================3==================  -->
                                <!--  Buatlah input untuk tahun_terbit yang harus diisi; dengan label  -->
                                <!-- Create input for publishing_year, with label -->
                                <input type="string" class="form-control" name="publishing_year" id="publishing_year" required >
                                <label for="publishing_year">year</label>
                            </div>

                            <button type="submit" name="create" id="create" class="btn btn-primary mb-3 mt-3 w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>