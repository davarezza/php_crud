<?php
// config database
include_once("koneksi.php");

// Check if update is submitted, then update the record
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $title = $_POST['judul_buku'];
    $writer = $_POST['penulis'];
    $publisher = $_POST['penerbit'];
    $inven = $_POST['no_inventaris'];

    // Update the record
    $result = mysqli_query($conn, "UPDATE books SET judul_buku='$title', penulis='$writer', penerbit='$publisher', no_inventaris='$inven' WHERE id=$id");

    // Redirect to the index page
    header("Location: index.php");
}

// Show Data based on ID and get url
$id = $_GET['id'];

// Take data from id
$result = mysqli_query($conn, "SELECT * FROM books WHERE id=$id");

while ($book_data = mysqli_fetch_array($result)) {
    $title = $book_data['judul_buku'];
    $writer = $book_data['penulis'];
    $publisher = $book_data['penerbit'];
    $inven = $book_data['no_inventaris'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <h3 class="mb-3">Edit Book Data</h3>
            <form action="edit.php" method="post" name="update_user">
                <div class="mb-3">
                    <label for="judul_buku" class="form-label">Book Title</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= $title; ?>">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Writer</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $writer; ?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $publisher; ?>">
                </div>
                <div class="mb-3">
                    <label for="no_inventaris" class="form-label">Inventory Number</label>
                    <input type="number" class="form-control" id="no_inventaris" name="no_inventaris" value="<?= $inven; ?>">
                </div>
                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="submit" value="Update" name="update" class="btn btn-info">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
