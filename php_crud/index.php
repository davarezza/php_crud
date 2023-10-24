<?php 
include_once("koneksi.php");

$result = mysqli_query($conn, "SELECT * FROM books ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container mt-4">
    <div class="row">
        <a href="add.php" class="btn btn-primary btn-sm mb-4">Add New Books</a>
  <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">#</th>
      <th scope="col">Book Name</th>
      <th scope="col">Writer</th>
      <th scope="col">Publisher</th>
      <th scope="col">Inventory Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $row_number = 1; // Inisialisasi nomor urut
    while ($book_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<th scope='row'>$row_number</th>";
        echo "<td>". $book_data['judul_buku'] ."</td>";
        echo "<td>". $book_data['penulis'] ."</td>";
        echo "<td>". $book_data['penerbit'] ."</td>";
        echo "<td>". $book_data['no_inventaris'] ."</td>";
        echo "<td><a href='edit.php?id=$book_data[id]' class='btn btn-primary'>Edit</a> <a href='delete.php?id=$book_data[id]' class='btn btn-danger'>Delete</a></td></tr>";
        $row_number++;
    }
?>
  </tbody>
</table>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
