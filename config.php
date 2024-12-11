<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pendaftaran_siswa";

// Koneksi ke database
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
