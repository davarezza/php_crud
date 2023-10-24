<?php 
    include_once("koneksi.php");

    // Get id to delete data
    $id = $_GET['id'];

    // Delete based on ID
    $result = mysqli_query($conn, "DELETE FROM books WHERE id=$id");

    header("Location: index.php");
?>