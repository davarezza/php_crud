<html>

<head>
    <title>Add Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <div class="container mt-4">
        <div class="row">
            <a href="index.php">Back to Home</a> <br><br>
            <h3 class="mb-3">Tambah Data Buku</h3>
            <form action="add.php" method="post" name="form1">
                <div class="mb-3">
                    <label for="judul_buku" class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Your Book Title">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Writer</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Your Writer Name">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Your Publisher Name">
                </div>
                <div class="mb-3">
                    <label for="no_inventaris" class="form-label">Inventory Number</label>
                    <input type="number" class="form-control" id="no_inventaris" name="no_inventaris" placeholder="Your Inventory Number">
                </div>
                <button type="submit" name="submit" value="add" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <?php
    // Check if form submit
    if (isset($_POST['submit'])) {
        $title = $_POST['judul_buku'];
        $writer = $_POST['penulis'];
        $publisher = $_POST['penerbit'];
        $inven = $_POST['no_inventaris'];

        // call connection again
        include_once('koneksi.php');

        // Add data in table
        $result = mysqli_query($conn, "INSERT INTO books(judul_buku,penulis,penerbit,no_inventaris) VALUES('$title', '$writer', '$publisher', '$inven')");

        // Show Message when user added
        echo "Books added successfully. <a href='index.php'>View Books</a>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>