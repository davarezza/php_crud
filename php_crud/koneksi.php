<?php 
// Membuat Koneksi
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

if (!$conn) {
    die("koneksi gagal" . mysqli_connect_error());
}
?>