<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <!-- Hero -->
     <div class="container">
        <div class="row">
            <div class="col-md-12 text-center p-5 hero-text">
                <h1>Welcome to EAD Library</h1>
                <br>
                <img src="logo-ead.png" alt="EAD Library" width="800px">
                <br>
                <p>EAD Library is a library management website that provides book catalog and information about books.</p>
            </div>
            <div class="row justify-content-center gap-3 mt-4">
                <a href="catalog_book.php" class="btn btn-primary w-50">Book Catalog</a>
                <a href="add_book.php" class="btn btn-outline-primary w-50">Add Book</a>
            </div>
        </div>
     </div>
</body>
</html>